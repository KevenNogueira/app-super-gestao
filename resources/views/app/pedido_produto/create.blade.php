@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Cadastro de Produto ao Pedido</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">

            <div class="login-card">

                <div><strong>Numero do pedido:</strong> {{ $pedido->num_pedido }}</div>
                <br>
                <div><strong>Cliente:</strong> {{ $pedido->cliente->nome }}</div>
                <br>

                <form method="post" action="{{ route('pedido-produto.store', ['pedido' => $pedido]) }}">
                    @csrf

                    <select name="produto_id" class="borda-preta">
                        <option>-- Selecione o Produto --</option>

                        @foreach ($produtos as $produto)
                            <option value="{{ $produto->id }}" {{ old('produto_id') == $produto->id ? 'selected' : '' }}>
                                {{ $produto->nome }}</option>
                        @endforeach

                    </select>
                    {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}

                    <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>


        @if (sizeof($pedido->produtos) > 0)

            <div>
                <h3>Produtos do pedido</h3>
            </div>

            <div class="informacao-pagina">
                <div class="box-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Peso</th>
                                <th>Tamanho</th>
                                <th>Data da Inclusão</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedido->produtos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>
                                        {{ $produto->peso }}
                                        {{ $produto->unMedidaMassa->unidade }}
                                    </td>
                                    <td>
                                        {{ $produto->comprimento }} x
                                        {{ $produto->largura }} x
                                        {{ $produto->altura }}
                                        {{ $produto->unMedidaComprimento->unidade }}

                                    </td>
                                    <td>{{ $produto->pivot->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @endif

    </div>
@endsection
