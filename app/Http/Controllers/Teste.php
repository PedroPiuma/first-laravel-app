<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    // public function index()
    // {
    //     // $data = [
    //     //     'nome' => 'Luís',
    //     //     'sobrenome' => 'Piúma',
    //     // ];
    //     $data['mostrar'] = true;
    //     $data['frase'] = 'Frase do meu projeto';
    //     $data['nomes'] = ['Joao', 'Carlos', 'Antonio'];
    //     return view('home', $data);
    // }
    // public function formulario()
    // {
    //     return view('formulario-login');
    // }

    public function index()
    {
        return view('home');
    }
    public function servicos()
    {
        return view('servicos');
    }
    public function galeria($pagina)
    {
        $data['pagina'] = $pagina;
        return view('galeria', $data);
    }
    public function contatos($nome, $sobrenome = '')
    {
        $data['nome'] = $nome;
        $data['sobrenome'] = $sobrenome;
        return view('contatos', $data);
    }
}
