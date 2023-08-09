@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Listagem de Pedidos</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Cadastro</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID Cliente</th>
                            <th>Numero do Pedido</th>
                            <th>Data do Pedido</th>
                            <th>Adicionar Produtos</th>
                            <th>Visualização</th>
                            <th>Exclusão</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->cliente_id }}</td>
                                <td>{{ $pedido->num_pedido }}</td>
                                <td>{{ $pedido->created_at }}</td>
                                <td>
                                    <a href="{{ route('pedido-produto.create', ['pedido' => $pedido->id]) }}">
                                        Adicionar Produto
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualização</a>
                                </td>
                                <td>
                                    <form id="form_{{ $pedido->id }}" method="POST"
                                        action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}">

                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $pedido->id }}').submit()">Exclusão</a>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pedidos->links() }}
                {{ 'Pagina atual: ' . $pedidos->currentPage() }}
            </div>
        </div>
    </div>
@endsection
