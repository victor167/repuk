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
        if($GLOBALS['_SERVER']['zindex']['router'] === get_router($route)){
            $GLOBALS['_SERVER']['zindex']['router_result'] = true;

            if(is_callable($resultRoute)){
                echo $resultRoute(); die();
            }else if(is_string($resultRoute)){
                $arr_resultRoute = explode('@', $resultRoute);
                if(count($arr_resultRoute)==2){
                    $require = __DIR__ . '/../../controllers/' . $arr_resultRoute[0] . '.php';
                    if(file_exists($require)){
                        require_once $require;

                        if(method_exists('controllers\\' . $arr_resultRoute[0],$arr_resultRoute[1])){
                            $controller = 'controllers\\' . $arr_resultRoute[0];
                            $method = $arr_resultRoute[1];

                            $result = (new $controller())->$method();
                            die($result);
                        }else{
                            dd('no existe');
                        }
                        echo 'CONTROLLER: ' .$resultRoute; die();
                    }

                }
            }
        }
    }
}