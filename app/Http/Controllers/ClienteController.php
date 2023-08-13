<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('created_at', 'desc')->simplePaginate(10);
        return view('app.cliente.index', [
            'titulo' => 'Clientes',
            'clientes' => $clientes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.cliente.create', [
            'titulo' => 'Cliente',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $regras = [
            'nome' => 'required|min:3|max:50',
            'cpf' => 'required|min:11|max:11',
            'email' => 'required|min:3|max:100',
            'telefone' => 'required|min:15|max:20',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido!',
            'nome.min' => 'O campo deve conter 3 caracteres mínimos!',
            'nome.max' => 'O nome deve conter 50 caracteres máximos!',
            'cpf.min' => 'O campo deve conter 11 caracteres mínimos!',
            'cpf.max' => 'O nome deve conter 11 caracteres máximos!',
            'email.min' => 'O campo deve conter 3 caracteres mínimos!',
            'email.max' => 'O nome deve conter 100 caracteres máximos!',
            'telefone.min' => 'O campo deve conter 15 caracteres mínimos!',
            'telefone.max' => 'O nome deve conter 20 caracteres máximos!',
        ];

        $request->validate($regras, $feedback);

        //dd($request->get('cpf'));

        /*         Cliente::create([
            'nome' => $request('nome'),
            'cpf' => $request('cpf'),
            'email' => $request('email'),
            'telefone' => $request('telefone'),
        ]); */

        Cliente::create($request->all());

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('app.cliente.show', [
            'titulo' => 'Cliente',
            'cliente' => $cliente,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $cpf)
    {
        $cliente = Cliente::find($cpf);
        return view('app.cliente.edit', [
            'titulo' => 'Cliente',
            'cliente' => $cliente,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cpf)
    {
        $regras = [
            'nome' => 'required|min:3|max:50',
            'cpf' => 'required|min:11|max:11',
            'email' => 'required|min:3|max:100',
            'telefone' => 'required|min:15|max:20',
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido!',
            'nome.min' => 'O campo deve conter 3 caracteres mínimos!',
            'nome.max' => 'O nome deve conter 50 caracteres máximos!',
            'cpf.min' => 'O campo deve conter 11 caracteres mínimos!',
            'cpf.max' => 'O nome deve conter 11 caracteres máximos!',
            'email.min' => 'O campo deve conter 3 caracteres mínimos!',
            'email.max' => 'O nome deve conter 100 caracteres máximos!',
            'telefone.min' => 'O campo deve conter 15 caracteres mínimos!',
            'telefone.max' => 'O nome deve conter 20 caracteres máximos!',
        ];


        $request->validate($regras, $feedback);

        Cliente::find($cpf)->update($request->all());

        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cliente::find($id)->delete();

        return redirect()->route('cliente.index');
    }
}
