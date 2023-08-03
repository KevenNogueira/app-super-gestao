@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Cadastro de Detalhe dos Produto</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                @component('app.produto_detalhe._components.form_create_edit', ['unidadesComprimento' => $unidadesComprimento])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
