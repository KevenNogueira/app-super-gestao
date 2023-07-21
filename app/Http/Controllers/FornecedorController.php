<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index', ['titulo' => 'Fornecedores']);
    }

    public function listar()
    {
        return view('app.fornecedor.lista', ['titulo' => 'Fornecedores']);
    }

    public function cadastro(Request $request)
    {
        $msg = '';

        if (!empty($request->input('_token'))) {
            $regras = [
                'nome' => 'required|min:3|max:50',
                'cnpj' => 'required|min:14|max:14',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'required',
            ];

            $feedback = [
                'required' => 'O campo :attribute de ser preenchido!',
                'nome.min' => 'O Nome deve conter no mínimos 3 caracteres!',
                'nome.max' => 'O Nome deve conter no máximo 50 caracteres!',
                'cnpj.min' => 'O CNPJ deve conter no mínimos 14 caracteres!',
                'cnpj.max' => 'O CNPJ deve conter no máximo 14 caracteres!',
                'uf.min' => 'A UF deve conter no mínimo 2 caracteres!',
                'uf.max' => 'A UF deve conter no máximo 2 caracteres!',
            ];

            $request->validate($regras, $feedback);

            Fornecedor::create($request->all());

            $msg = 'Registro incluido com Sucesso';
        }

        return view('app.fornecedor.cadastro', ['titulo' => 'Fornecedores', 'msg' => $msg]);
    }
}
