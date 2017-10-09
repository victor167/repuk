<?php
/**
 * Created by PhpStorm.
 * User: winvictor
 * Date: 8/10/2017
 * Time: 17:38
 */

function dd($vars)
{
    ob_end_clean();
    $parts_vars = print_r($vars,1);
    echo '<pre>';
    echo htmlspecialchars($parts_vars);
    echo '</pre>';
    die();
}

function base_url()
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF'];

    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
    $pathInfo = pathinfo($currentPath);

    // output: localhost
    $hostName = $_SERVER['HTTP_HOST'];

    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';

    // return: http://localhost/myproject/
    return $protocol.'://'.$hostName.$pathInfo['dirname']."/";
}

function get_router(){
    $args = func_get_args();
    if(count($args)==1 && is_string($args[0]))
    {
        $url_temp = $args[0];
    }
    else
    {
        $url_temp = str_replace(pathinfo($_SERVER['PHP_SELF'])['dirname'],'',$_SERVER['REQUEST_URI']);
    }

    $url_temp = preg_replace('/\?.*/', '', $url_temp);
    $url_temp = trim($url_temp,"/");

    return explode('/',$url_temp);
}