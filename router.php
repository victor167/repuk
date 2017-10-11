<?php


Route::get('/demo', 'DemoController@index');
Route::get('/demo/capitulo-{id}-{clave}', 'DemoController@index2');

Route::get('/', function () {
    return 'Hello World';
});

