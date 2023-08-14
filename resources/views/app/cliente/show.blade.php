@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Visualização Cliente</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cpf }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        @if (sizeof($cliente->pedidos) > 0)

            <div>
                <h3>Pedidos</h3>
            </div>

            <div class="informacao-pagina">
                <div class="box-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numero do Pedido</th>
                                <th>Data do Pedido</th>
                                <th>Visualização</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente->pedidos as $pedido)
                                <tr>
                                    <td>{{ $pedido->num_pedido }}</td>
                                    <td>{{ $pedido->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('pedido.show', ['pedido' => $pedido->num_pedido]) }}">Visualização
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        @endif

    </div>

@endsection
