@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Listagem Produtos</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Cadastro</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade Médida</th>
                            <th>Visualização</th>
                            <th>Exclusão</th>
                            <th>Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualização</a></td>
                                <td><a href="#">Exclusão</a></td>
                                <td><a href="#">Edição</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->links() }}
                {{ 'Pagina atual: ' . $produtos->currentPage() }}
            </div>
        </div>
    </div>
@endsection
