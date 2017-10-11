<?php
/**
 * Created by PhpStorm.
 * User: winvictor
 * Date: 8/10/2017
 * Time: 18:08
 */
namespace controllers;

class DemoController
{
    public function index(){
        return 'HOLA MUNDO';
    }

    public function index2($id,$clave){
        return 'Mi id: ' . $id . ', clave: ' . $clave;
    }
}