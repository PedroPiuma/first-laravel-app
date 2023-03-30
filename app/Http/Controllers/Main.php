<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Main extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }
    public function submissao(Request $request)
    {
        $request->validate(
            [
                'text_produto' => 'required|min:3|max:10',
                'text_marca' => ['required', 'max:10'],
            ],
            [
                'text_produto.required' => 'O :attribute é de preenchimento obrigatório.',
                'text_produto.min' => 'O :attribute tem que ter mais do que :min letras.',
                'text_produto.max' => 'O :attribute não pode ter mais do que :max letras.'
            ]
        );
        if ($request->isMethod('post')) {
            // print_r($request->input());
            $produto = $request->input('text_produto');
            $marca = $request->input('text_marca');

            echo "O produto é $produto e a marca é $marca";
        } else echo "NOK";
    }

    // upload de ficheiros
    public function upload()
    {
        // formulario de upload
        return view('upload');
    }

    public function upload_submissao(Request $request)
    {
        // return view('upload');
        $validacao = $request->validate(
            [
                // 'ficheiro' => 'required|image|mimes:png,jpg,jpeg|max:100|dimensions:min_width=200,min_height=200'
                'ficheiro' => ['required']
            ],
            [
                'ficheiro.required' => 'Imagem é necessário',
                'ficheiro.image' => 'O arquivo precisa ser uma imagem'
            ]
        );

        // $request->file('ficheiro')->store('public/pdfs');
        // $request->file('ficheiro')->storeAs('public/pdfs', 'teste' . time() . '.pdf');
        // Storage::putFile('public/pdfs', $request->file('ficheiro'));
        Storage::putFileAs('public/pdfs', $request->file('ficheiro'), 'documento' . time() . '.pdf');

        echo 'ok';
    }

    public function sessao(Request $request)
    {
        //colocar dados
        // $request->session()->put('usuario', 'joao');
        $request->session()->put([
            'usuario' => 'ana',
            'role' => 'administrador'
        ]);

        // apresentar dados
        echo $request->session()->get('permissao', 'Inexistente');

        // verificar se variavel existe
        if ($request->session()->has('permissao')) echo "Existe";
        else echo 'Não existe';

        // eliminar dados
        // $request->session()->forget(['usuario', 'role'])
        $request->session()->forget('usuario');

        //alterar dados
        // $request->session()->put('usuario', 'jorge');
    }
    public function ver_sessao(Request $request)
    {
        echo "<pre>";
        print_r($request->session()->all());
    }
}
