@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Cadastro de Produto</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                <form action="#" method="post">
                    @csrf
                    <input type="hidden" name="id" value="">

                    <input type="text" class="borda-preta" name="nome" value="" placeholder="Nome">

                    <input type="text" class="borda-preta" name="descricao" value="" placeholder="Descrição">

                    <input type="url" class="borda-preta" name="peso" value="" placeholder="Peso">

                    <select name="unidade_id" class="borda-preta">
                        <option>-- Selecione a unidade de medida --</option>

                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach

                    </select>

                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
