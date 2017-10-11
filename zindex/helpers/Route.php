<?php
/**
 * Created by PhpStorm.
 * User: winvictor
 * Date: 8/10/2017
 * Time: 17:47
 */

class Route
{

    public static function groups($route,$callbackRoute)
    {

    }

    public static function get($route,$resultRoute)
    {
        //dd($GLOBALS['_SERVER']['zindex']['router']);
        //dd(get_router($route));
        $router_visitor = $GLOBALS['_SERVER']['zindex']['router'];
        $router_compare = get_router($route);
        $match = 0;

        $variables_method = Array();

        if(count($router_visitor) == count($router_compare)){
            for ($i=0;$i<count($router_visitor);$i++){
                if(preg_match_all("/{([a-zA-Z]+[0-9]*)+}/",$router_compare[$i],$matches1,PREG_OFFSET_CAPTURE)){
                    $match_replace = preg_replace("/{([a-zA-Z]+[0-9]*)+}/im","([a-zA-Z0-9]+)",$router_compare[$i]);
                    $match_replace = '/^' . $match_replace . '$/';
                    if(preg_match($match_replace,$router_visitor[$i],$matches2)){
                        $match++;
                        for ($e=1;$e<count($matches2);$e++){
                            if(isset($matches2[$e])){
                                $variables_method[] = $matches2[$e];
                            }
                        }
                    }
                }else if($router_compare[$i]==$router_visitor[$i]){
                    $match++;
                }else{
                    break;
                }
            }
        }

        if($match==count($router_visitor)){

            $GLOBALS['_SERVER']['zindex']['router_result'] = true;

            if(is_callable($resultRoute)){
                echo $resultRoute(); die();
            }else if(is_string($resultRoute)){
                $arr_resultRoute = explode('@', $resultRoute);
                if(count($arr_resultRoute)==2){
                    $require = __DIR__ . '/../../controllers/' . $arr_resultRoute[0] . '.php';
                    if(file_exists($require)){
                        require_once $require;

                        $controller = 'controllers\\' . $arr_resultRoute[0];
                        $method = $arr_resultRoute[1];

                        if(method_exists($controller,$method)){

                            $reflectionMethod = new ReflectionMethod($controller, $method);
                            $num_parameters = $reflectionMethod->getNumberOfParameters();
                            if($num_parameters==count($variables_method)){
                                $result = call_user_func_array(array((new $controller()), $method), $variables_method);
                                die($result);
                            }else{
                                dd('metodo de la clase no recibe los parametros correctos');
                            }
                        }else{
                            dd('metodo de la clase no existe');
                        }
                    }
                }
            }
        }
    }
}