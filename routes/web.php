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

//Ruta de bienvenida

Route::get('/', function () {
    return view('welcome');
});

//Ruta de usuarios


/*
Ruta original de usuarios:
Route::get('/usuarios', function(){
	return ('Hola muchos usuarios');
});
*/

Route::get('/usuarios', 'UserController@index');


/*
Para esta ruta se recibe el parametro 5 por ejemplo
la url seria: localhost/blog/public/usuarios/5
*/

Route::get('/usuarios/{id}', 'UserController@show')-> where ('id', '[0-9]+');



Route::get('/usuarios/nuevo','UserController@create');

//Pasar mas de 1 parametro en la URL
//Nota que este esta arreglado de forma tal de eu parametro apellido pueda estar null

Route::get('/saludador/{name}/{lastname?}','WelcomeUserController@index');

//SEgundo commit


