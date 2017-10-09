<?php


Route::get('/demo', 'DemoController@index');

Route::get('/', function () {
    return 'Hello World';
});

