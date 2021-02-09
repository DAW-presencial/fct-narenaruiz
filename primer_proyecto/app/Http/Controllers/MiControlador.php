<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    function holaMundo(){
        return "hola Mundo";
    }

    function adios(){
        return "Adios";
    }

    function probando(){
        return "como estas?";
    }
}
