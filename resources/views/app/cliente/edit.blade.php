@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Cadastro de Detalhe dos Produto</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                @component('app.cliente._components.form_create_edit', ['titulo' => 'Cliente', 'cliente' => $cliente])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
