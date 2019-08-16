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


Route::get('/', function () {
    return view('welcome');
});


/*

Route::get('/login',function(){

return 'login';

});*/

Route::get('/logout','UserController@logout');

Route::get('/login','UserController@login');

Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{id}','UserController@show')->where('id','[0-9]*');

/*
Route::get('/usuarios/{id}',function($id){

//return 'Mostrando detalle del usuario: '.$_GET['id'];

//return 'Mostrando detalle del usuario: '.$id;
 
  return "Mostrando detalle del usuario: {$id}";


})->where('id','[0-9]*');

*/


Route::get('/usuarios/nuevo','UserController@create');


Route::get('/usuarios/datos/{name}/{nickname}',function($name,$nickname){


return "Hola {$name} {$nickname}";

});


Route::get('/usuarios/info/{edad}/{fecha_nac?}',function($edad,$fecha_nac=null){


return "{$edad} {$fecha_nac}";

});