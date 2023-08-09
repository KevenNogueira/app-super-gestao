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
                            <th>ID Cliente</th>
                            <th>Numero do Pedido</th>
                            <th>Data do Pedido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $pedido->cliente_id }}</td>
                            <td>{{ $pedido->num_pedido }}</td>
                            <td>{{ $pedido->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
