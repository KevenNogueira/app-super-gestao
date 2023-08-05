<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Http\Controllers\Controller;
use App\Models\Fornecedor;
use App\Models\UnMedidaMassa;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $produtos = Produto::simplePaginate(10);

        return view('app.produto.index', [
            'titulo' => 'Produtos',
            'produtos' => $produtos,
            'request' => $request
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidadesMassa = UnMedidaMassa::all();
        $fornecedores = Fornecedor::all();

        return view('app.produto.create', [
            'titulo' => 'Produtos',
            'unidadesMassa' => $unidadesMassa,
            'fornecedores' => $fornecedores
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:2000',
            'peso' => 'required|integer',
            'un_medida_massa_id' => 'exists:un_medida_massas,id',
            'fornecedor_id' => 'exists:fornecedores,id'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido!',
            'min' => 'O campo :attribute deve conter 3 caracteres mínimos!',
            'nome.max' => 'O nome deve conter 100 caracteres máximos!',
            'descricao.max' => 'A descrição deve conter 2.000 caracteres máximos!',
            'peso' => 'O peso deve ser um número inteiro!',
            'un_medida_massa_id.exists' => 'A unidade informada não existe!',
            'fornecedor_id.exists' => 'Fornecedor não existe!'
        ];

        $request->validate($regras, $feedback);

        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('app.produto.show', [
            'titulo' => 'Produto',
            'produto' => $produto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        $unidadesMassa = UnMedidaMassa::all();
        $fornecedores = Fornecedor::all();

        return view('app.produto.edit', [
            'titulo' => 'Produtos',
            'produto' => $produto,
            'unidadesMassa' => $unidadesMassa,
            'fornecedores' => $fornecedores
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $regras = [
            'nome' => 'required|min:3|max:100',
            'descricao' => 'required|min:3|max:2000',
            'peso' => 'required|integer',
            'un_medida_massa_id' => 'exists:un_medida_massas,id',
            'fornecedor_id' => 'exists:fornecedores,id'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido!',
            'min' => 'O campo :attribute deve conter 3 caracteres mínimos!',
            'nome.max' => 'O nome deve conter 100 caracteres máximos!',
            'descricao.max' => 'A descrição deve conter 2.000 caracteres máximos!',
            'peso' => 'O peso deve ser um número inteiro!',
            'un_medida_massa_id.exists' => 'A unidade informada não existe!',
            'fornecedor_id.exists' => 'Fornecedor não existe!'
        ];

        $request->validate($regras, $feedback);

        $produto->update($request->all());

        return redirect()->route('produto.show', ['produto' => $produto->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produto.index');
    }
}
