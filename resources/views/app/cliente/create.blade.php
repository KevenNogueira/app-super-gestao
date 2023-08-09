@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Cadastro de Cliente</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                @component('app.cliente._components.form_create_edit')
                @endcomponent
            </div>
        </div>
    </div>
@endsection
