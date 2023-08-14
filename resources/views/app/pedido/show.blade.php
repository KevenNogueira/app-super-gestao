@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Visualização Cliente</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Numero do Pedido</th>
                            <th>Data do Pedido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pedido->cliente->nome }}</td>
                            <td>{{ $pedido->num_pedido }}</td>
                            <td>{{ $pedido->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
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
