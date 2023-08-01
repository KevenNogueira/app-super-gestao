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
                <li><a href="#">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="login-card">
                <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="text" class="borda-preta" name="nome" value="{{ $produto->nome ?? old('nome') }}"
                        placeholder="Nome">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input type="text" class="borda-preta" name="descricao"
                        value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição">
                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

                    <input type="number" min="1" class="borda-preta" name="peso"
                        value="{{ $produto->peso ?? old('peso') }}" placeholder="Peso">
                    {{ $errors->has('peso') ? $errors->first('peso') : '' }}

                    <select name="unidade_id" class="borda-preta">
                        <option>-- Selecione a unidade de medida --</option>

                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}"
                                {{ ($produto->unidade_id ?? old('unidade_id')) == $unidade->id ? 'selected ' : '' }}>
                                {{ $unidade->descricao }}
                            </option>
                        @endforeach

                    </select>
                    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}

                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
