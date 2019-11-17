<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        $titulo = 'Bienvenido!!';
        return view('paginas.index')->with('titulo', $titulo);
    }

    public function cliente(){
        return view('paginas.cliente');
    }
    
    public function experto(){
        return view('solicitudes.index');
    }
}
