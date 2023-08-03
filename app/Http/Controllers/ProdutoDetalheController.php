<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProdutoDetalhe;
use App\Models\UnMedidaComprimento;
use Illuminate\Http\Request;

class ProdutoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unidadesComprimento = UnMedidaComprimento::all();
        return view('app.produto_detalhe.create', [
            'titulo' => 'Produto Detalhe',
            'unidadesComprimento' => $unidadesComprimento
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ProdutoDetalhe::create($request->all());
        echo 'Cadastro fetio com sucesso!!';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdutoDetalhe $produtoDetalhe)
    {
        $unidadesComprimento = UnMedidaComprimento::all();

        return view('app.produto_detalhe.edit', [
            'titulo' => 'Produto Detalhe',
            'produto_detalhe' => $produtoDetalhe,
            'unidadesComprimento' => $unidadesComprimento
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {

        $produtoDetalhe->update($request->all());
        echo 'Atualização feita com sucesso!!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
