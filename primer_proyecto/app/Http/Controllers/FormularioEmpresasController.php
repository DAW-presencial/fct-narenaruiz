<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class FormularioEmpresasController extends Controller
{
    public function store()//Request $request
    {
        request()->validate([
            'nombre' => ['required', 'min:3', 'max:30'],
            'cif' => 'required',
            'direccion' => 'required',
            'poblacion' => 'required',
            'cp' => ['required','digits:5'],
            'telefono1' => 'required',
            'telefono2' => 'required',
            'fax' => 'required',
            'correo' => ['required', 'email'],
            'sectorProductivo' => "required",
            'actividadPrincipal' => 'required',
            'titularidad' => "required"
        ]);

        return 'Datos Validados';
    }
}
