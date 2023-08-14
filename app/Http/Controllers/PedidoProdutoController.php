<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Pedido $pedido)
    {
        $produtos = Produto::all();

        return view('app.pedido_produto.create', [
            'titulo' => 'Cadastro de Produto',
            'pedido' => $pedido,
            'produtos' => $produtos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pedido $pedido)
    {
        $regras = [
            'produto_id' => 'exists:produtos,id'
        ];

        $feedback = [
            'produto_id.exists' => 'O produto informado não existe'
        ];

        $request->validate($regras, $feedback);

        $pedidoProduto = new PedidoProduto();
        $pedidoProduto->num_pedido = $pedido->num_pedido;
        $pedidoProduto->produto_id = $request->get('produto_id');
        $pedidoProduto->save();

        return redirect()->route('pedido-produto.create', ['pedido' => $pedido->num_pedido]);
    }
}
