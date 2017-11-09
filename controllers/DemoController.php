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

    public function index2($id, $clave){
        return 'Mi id: ' . $id . ', clave: ' . $clave;
    }

    public function index3(){
        return view("demo/index")
            ->param('param1','simple')
            ->param('param2',['item1','item2'])
            ->get();
    }
}