<?php
/**
 * Created by PhpStorm.
 * User: winvictor
 * Date: 8/10/2017
 * Time: 17:37
 */

require_once 'helpers.php';
require_once 'routing.php';

require_once 'helpers/Route.php';

function callback($bufer)
{
    if($GLOBALS['_SERVER']['zindex']['router_result'] || !empty($bufer)){
        return $bufer;
    }else{
        return '404';
    }
}

ob_start();
require_once '../router.php';

$content = ob_get_contents();
ob_end_clean();
die(callback($content));