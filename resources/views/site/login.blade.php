@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div class="login-card">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Usuário" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : '' }}

                    <input type="password" name="senha" value="{{ old('senha') }}" placeholder="Senha"
                        class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}

                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
                {{ $erro }}
            </div>
        </div>
    </div>
@endsection
