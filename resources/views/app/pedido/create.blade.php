@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Cadastro de Pedido</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                @component('app.pedido._components.form_create', ['clientes' => $clientes])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
