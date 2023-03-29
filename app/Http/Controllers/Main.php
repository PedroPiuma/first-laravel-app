<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
