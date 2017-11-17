<?php
/**
 * Created by PhpStorm.
 * User: winvictor
 * Date: 21/10/2017
 * Time: 13:17
 */

function view($name_view){
    return new View($name_view);
}

class View
{
    private $name_view = null;
    private $params = [];
    function __construct($_name_view) {
        if(is_string($_name_view)){
            $this->name_view = $_name_view;
        }
    }

    public function param($name,$value){
        if(is_string($name)){
            $object = new stdClass();
            $object->name = $name;
            $object->value = $value;
            $this->params[] = $object;
        }
        return $this;
    }

    public function get(){
        if($this->name_view!=null){
            $view = __DIR__ . '/../../view/' . $this->name_view . '.php';
            if(file_exists($view)){
                $view_content = file_get_contents($view);

                if(preg_match_all("/@extends\('([a-zA-Z0-9\/_]*)'\)/",$view_content,$matches,PREG_OFFSET_CAPTURE)){
                    if(isset($matches[1]) && isset($matches[1][0]) && isset($matches[1][0][0])){
                        $name_view_template = $matches[1][0][0];
                        $view_template = __DIR__ . '/../../view/' . $name_view_template . '.php';
                        $view_template_content = file_get_contents($view_template);

                        $view_sections = [];

                        #Capturemos todos los @section[TEXT]
                        if(preg_match_all("/@section\('([a-zA-Z0-9_]*)'\)(\s*([^@]*|\\@)*)@endsection/",$view_content,$matches2,PREG_OFFSET_CAPTURE)){
                            $count_match_section = count($matches2[1]);
                            for($i=0;$i<$count_match_section;$i++){
                                $view_sections[$matches2[1][$i][0]] = $matches2[2][$i][0];
                            }
                        }

                        #Capturemos todos los @section[STRING]
                        if(preg_match_all("/@section\('([a-zA-Z0-9_]*)','(.*)'\)/",$view_content,$matches3,PREG_OFFSET_CAPTURE)){
                            $count_match_section = count($matches3[1]);
                            for($i=0;$i<$count_match_section;$i++){
                                $view_sections[$matches3[1][$i][0]] = $matches3[2][$i][0];
                            }
                        }

                        #Capturamos todos los @use Y replazamos por el contenido de los @section
                        if(preg_match_all("/@use\('([a-zA-Z0-9_]*)'\)/",$view_template_content,$matches4,PREG_OFFSET_CAPTURE)){
                            $count_match_use = count($matches4[1]);
                            if(isset($matches4[1]) && $count_match_use>0){
                                for($i=0;$i<$count_match_use;$i++){
                                    $use_text = preg_quote($matches4[0][$i][0],'/');
                                    $use_title = $matches4[1][$i][0];

                                    if(isset($view_sections[$use_title])){
                                        $view_template_content = preg_replace('/' . $use_text . '/',$view_sections[$use_title],$view_template_content);
                                    }
                                }
                            }
                        }

                        #Capturamos todas las variables {{ $x }} y reamplazamos por lo mandado
                        if(preg_match_all("/@use\('([a-zA-Z0-9_]*)'\)/",$view_template_content,$matches5,PREG_OFFSET_CAPTURE)){
                            $count_match_use = count($matches5[1]);
                        }

                        return $view_template_content;
                    }
                }
                return $view_content;
            }
            return 'view no found';
        }
        return 'view no valido';
    }
}