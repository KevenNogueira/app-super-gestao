@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Consulta de Fornecedor</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.cadastro') }}">Cadastro</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consultar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                {{ $msg ?? '' }}
                <form action="{{ route('app.fornecedor.consulta') }}" method="post">
                    @csrf
                    <input type="text" class="borda-preta" name="nome" placeholder="Nome">
                    <input type="text" class="borda-preta" name="cnpj" placeholder="CNPJ">
                    <input type="url" class="borda-preta" name="site" placeholder="Site">
                    <input type="text" class="borda-preta" name="uf" placeholder="UF">
                    <input type="email" class="borda-preta" name="email" placeholder="E-mail">
                    <button type="submit" class="borda-preta">Pesquisar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
