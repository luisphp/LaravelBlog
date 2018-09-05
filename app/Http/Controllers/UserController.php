<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function index(){

        if (request()-> has('empty')){

            $users =[];
        }else{
            $users = ['Joel', 'Ellie', 'Tess'];
        }





    	return view('Users', ['Users' => $users]);
    }

    public function show($id){
    	return "Hola usuario:  {$id}";
    }


    public function create(){
    	return "Crear usuarios";
    }


}
