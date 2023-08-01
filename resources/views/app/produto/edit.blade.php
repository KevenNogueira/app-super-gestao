@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Edição de Produto</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                @component('app.produto._components.form_create_edit', ['produto' => $produto, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
