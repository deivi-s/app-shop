<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrueba extends Controller
{
    public function prueba()
    {
    	return view('welcome');
    }
}
