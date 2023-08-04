@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Edição Detalhes do Produto</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">

                <h4>Produto</h4>
                <div><strong>Nome:</strong> {{ $produto_detalhe->produto->nome }}</div>
                <br>
                <div><strong>Descrição:</strong> {{ $produto_detalhe->produto->descricao }}</div>
                <br>

                @component('app.produto_detalhe._components.form_create_edit', [
                    'produto_detalhe' => $produto_detalhe,
                    'unidadesComprimento' => $unidadesComprimento,
                ])
                @endcomponent

            </div>
        </div>
    </div>
@endsection
