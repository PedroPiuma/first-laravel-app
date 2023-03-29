<?php

namespace App\Http\Controllers;

use App\Models\Socio;
// use App\Models\Socios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $model = new Socios;
        // $resultado = $model->getSocios();

        // foreach ($resultado as $socio) {
        //     echo "<p>" . $socio->id . "</p>";
        //     echo "<p>" . $socio->nome . "</p>";
        //     echo "<p>" . $socio->telefone . "</p>";
        //     echo "<hr>";
        // }
        // return view('home');

        $socios = Socio::all();

        foreach ($socios as $socio) {
            echo "$socio->nome <br>";
        }

        // $socio = new Socio();
        // $socio->nome = 'Joaquim';
        // $socio->telefone = '1010';
        // $socio->email = 'teste@teste.com';
        // $socio->save();
    }
    public function servicos()
    {
        // $resultado = DB::table('socios')->get();
        $resultado = DB::table('socios')->get()->all();
        // echo "<pre>";
        // print_r($resultado);

        foreach ($resultado as $socio) {
            echo "<p>$socio->nome</p>";
        }

        // return view('servicos');
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
