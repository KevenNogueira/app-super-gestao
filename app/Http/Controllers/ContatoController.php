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
        $request->validate([
            'nome' => 'required|min:5|max:50',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);

        SiteContato::created($request->all());
    }
}