@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Listagem Clientes</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Cadastro</a></li>
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
                            <th>Visualização</th>
                            <th>Exclusão</th>
                            <th>Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->telefone }}</td>
                                <td><a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Visualização</a></td>
                                <td>
                                    <form id="form_{{ $cliente->id }}" method="POST"
                                        action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}">

                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $cliente->id }}').submit()">Exclusão</a>

                                    </form>
                                </td>
                                <td><a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">Edição</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->links() }}
                {{ 'Pagina atual: ' . $clientes->currentPage() }}
            </div>
        </div>
    </div>
@endsection
