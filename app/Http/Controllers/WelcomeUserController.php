<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //

    public function __invoke($name, $last_name=null){

if ($last_name != null){

		return "Hola {$name}, apellido: {$last_name}";

	}else{

		return "Hola {$name}";

	}

    }
}
