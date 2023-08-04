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
                            <th>Unidade Massa </th>
                            <th>Comprimento</th>
                            <th>Largura</th>
                            <th>Altura</th>
                            <th>Unidade Comprimento</th>
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
                                <td>{{ $produto->un_medida_massa_id }}</td>
                                <td>{{ $produto->produtoDetalhe->comprimento ?? '' }}</td>
                                <td>{{ $produto->produtoDetalhe->largura ?? '' }}</td>
                                <td>{{ $produto->produtoDetalhe->altura ?? '' }}</td>
                                <td>{{ $produto->produtoDetalhe->un_medida_comprimento_id ?? '' }}</td>
                                <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualização</a></td>
                                <td>
                                    <form id="form_{{ $produto->id }}" method="POST"
                                        action="{{ route('produto.destroy', ['produto' => $produto->id]) }}">

                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $produto->id }}').submit()">Exclusão</a>

                                    </form>
                                </td>
                                <td><a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Edição</a>
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
