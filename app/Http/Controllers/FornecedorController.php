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

    public function listar(Request $request)
    {
        $fornecedores = Fornecedor::where('nome', 'like', '%' . $request->input('nome') . '%')
            ->where('cnpj', 'like', '%' . $request->input('cnpj') . '%')
            ->where('site', 'like', '%' . $request->input('site') . '%')
            ->where('uf', 'like', '%' . $request->input('uf') . '%')
            ->where('email', 'like', '%' . $request->input('email') . '%')
            ->simplePaginate(10);

        return view('app.fornecedor.lista', [
            'titulo' => 'Fornecedores',
            'fornecedores' => $fornecedores,
            'request' => $request->all()
        ]);
    }

    public function cadastro(Request $request)
    {
        $msg = '';

        //Cadastro de Fornecedores
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

        return view('app.fornecedor.cadastro', [
            'titulo' => 'Fornecedores',
            'msg' => $msg
        ]);
    }

    public function editar(Request $request, $cnpj)
    {
        //Atualização de registro Fornecedores
        if (!empty($request->input('_token'))) {

            $fornecedor = Fornecedor::find($cnpj);

            $update = $fornecedor->update($request->all());

            if ($update) {
                $msg = 'Atualização feita com sucesso!';
            } else {
                $msg = 'Erro na atualização';
            }

            return view('app.fornecedor.index', [
                'titulo' => 'Fornecedores',
                'msg' => $msg
            ]);
        };

        $fornecedor = Fornecedor::find($cnpj);

        return view('app.fornecedor.editar', [
            'titulo' => 'Fornecedores',
            'fornecedor' => $fornecedor
        ]);
    }

    public function excluir($cnpj)
    {
        if (Fornecedor::find($cnpj)->delete()) {
            $msg = 'Exclusão realizada com sucesso!';

            return view('app.fornecedor.index', [
                'titulo' => 'Fornecedores',
                'msg' => $msg
            ]);
        }

        $msg = 'Erro na exclução de registro';

        return view('app.fornecedor.index', [
            'titulo' => 'Fornecedores',
            'msg' => $msg
        ]);
    }

    public function visualizar($cnpj)
    {
        $fornecedor = Fornecedor::find($cnpj);

        return view('app.fornecedor.visualizar', [
            'titulo' => 'Fornecedor',
            'fornecedor' => $fornecedor
        ]);
    }
}
