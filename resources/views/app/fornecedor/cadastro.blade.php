@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>
                @if (empty($fornecedor))
                    Cadastro de Fornecedor
                @else
                    Atualização de Registro Fornecedor
                @endif
            </h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.cadastro') }}">Cadastro</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
                <li><a href="{{ route('app.fornecedor.consulta') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                {{ $msg ?? '' }}
                <form action="{{ route('app.fornecedor.cadastro') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value=" {{ $fornecedor->id ?? '' }}">
                    <input type="text" class="borda-preta" name="nome" value="{{ $fornecedor->nome ?? old('nome') }}"
                        placeholder="Nome">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input type="text" class="borda-preta" name="cnpj" value="{{ $fornecedor->cnpj ?? old('cnpj') }}"
                        placeholder="CNPJ">
                    {{ $errors->has('cnpj') ? $errors->first('cnpj') : '' }}

                    <input type="url" class="borda-preta" name="site" value="{{ $fornecedor->site ?? old('site') }}"
                        placeholder="Site">
                    {{ $errors->has('site') ? $errors->first('site') : '' }}

                    <input type="text" class="borda-preta" name="uf" value="{{ $fornecedor->uf ?? old('uf') }}"
                        placeholder="UF">
                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                    <input type="email" class="borda-preta" name="email"
                        value="{{ $fornecedor->email ?? old('email') }}" placeholder="E-mail">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
