<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    public function index()
    {
        // echo "Estou no controlador";
        return view('home');
    }
    public function formulario()
    {
        return view('formulario-login');
    }
}
