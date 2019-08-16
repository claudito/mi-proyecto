<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


public function index(){

$users = [

'Juan',
'Pedro',
'Luis',
'Maria'

];


return view('users.index',[

'users'=>$users,
'title'=>'Listado de Usuarios'

]);


}

public function show($id){

return view('users.show',['id'=>$id]);;


}


public function create(){


return 'Crear Nuevo Usuario';
	
}



public function login()
{

$users = [

'Juan',
'Pedro',
'Luis',
'Maria'

];

$title = "Listado de Usuarios";

//Compact

/*
return view('users')->with([

'users'=>$users,
'title'=>'Lista de Usuarios'

]);*/

//dd(compact('title','users'));
return view('users.index',compact('title','users'));

}

public function logout()
{

$users = [

'Juan',
'Pedro',
'Luis',
'Maria'

];

return view('users.index')
->with('users',$users)
->with('title','Listado de Usuarios');

}




}
