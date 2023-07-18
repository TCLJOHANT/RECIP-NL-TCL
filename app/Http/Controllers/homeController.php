<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function cargarPerfil() //CARGAR VISTA DE PERFIL DE USUARIO
    {
        return view ('perfil');
    }
    public function cargarLoguin()
    {
        return view('Usuario.registro');
    }
}
