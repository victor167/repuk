<?php

Route::get('/demo', 'DemoController@index3');

Route::get('/', 'PrincipalController@index');
Route::get('/ingresar', 'PrincipalController@login');
Route::get('/registro', 'PrincipalController@register');
Route::get('/sobre-nosotros', 'PrincipalController@about');

Route::get('/cambiar-clave', 'PrincipalController@changePassword');
Route::get('/restaurar-clave', 'PrincipalController@restorePassword');

Route::get('/perfil', 'PrincipalController@profile');
Route::get('/politicas', 'PrincipalController@politics');
Route::get('/cambiar-email', 'PrincipalController@changeEmail');

Route::get('/contacto', 'PrincipalController@contact');
Route::get('/formas-de-pago', 'PrincipalController@paymentMethods');
Route::get('/producto', 'PrincipalController@product');
Route::get('/carrito-de-compras', 'PrincipalController@cart');

Route::get('/404', 'PrincipalController@error404');