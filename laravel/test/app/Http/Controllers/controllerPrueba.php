<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerPrueba extends Controller
{
    public function hola()
    {
        return "Hola desde PruebaController";
    }
    public function saludo($name)
    {
        return "Hola $name. Encantado de conocerle";
    }//
}
