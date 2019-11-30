<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function contactenos(){
    	$nombre = "Alex";
    	$edad = 25;
    	return view('contactenos',compact('nombre','edad'));
    }
}
