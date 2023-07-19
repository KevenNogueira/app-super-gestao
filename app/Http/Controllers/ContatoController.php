<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivo_contato = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contato' => $motivo_contato]);
    }

    public function salvar(Request $request)
    {
        $request->validate(
            [
                'nome' => 'required|min:5|max:50',
                'telefone' => 'required',
                'email' => 'required',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required'
            ],

            [
                'nome.min' => 'O nome deve conter no mínino 3 caracteres',
                'nome.max' => 'O nome deve conter no máximo 50 caracteres',
                'motivo_contatos_id.required' => 'Deve ser selecionado o motivo do contato',
                'required' => 'O campo :attribute deve ser preenchido'
            ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
