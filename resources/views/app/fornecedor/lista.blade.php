@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Fornecedores</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.cadastro') }}">Cadastro</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                ........ Consulta de Fornecedores ........
            </div>
        </div>
    </div>
@endsection
