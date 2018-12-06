<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// la ruta se asocia al controlador TestController a travez del metodo welcome
Route::get('/', 'TestController@welcome');
// podemos devolver una cadena, una vista o datos en distintos formatos
Route::get('/prueba',function(){
	return 'Hola soy la ruta prueba';
});	

Auth::routes();
// autentificcacion
Route::get('/home', 'HomeController@index')->name('home');
