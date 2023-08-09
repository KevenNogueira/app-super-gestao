<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::simplePaginate(10);

        return view('app.pedido.index', [
            'titulo' => 'Pedido',
            'pedidos' => $pedidos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();

        return view('app.pedido.create', [
            'titulo' => 'Pedido',
            'clientes' => $clientes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $regras =  [
            'cliente_id' => 'exists:clientes,id',
        ];

        $feedback = [
            'cliente_id.exists' => 'Cliente não existe!'
        ];

        $request->validate($regras, $feedback);

        $pedido = $request->all();
        $pedido['num_pedido'] = fake()->unique()->randomNumber(6, true);

        Pedido::create($pedido);

        return redirect()->route('pedido.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        return view('app.pedido.show', [
            'titulo' => 'Pedido',
            'pedido' => $pedido
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pedido::destroy($id);

        return redirect()->route('pedido.index');
    }
}
