@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Visualização Produtos</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Unidade Massa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->unMedidaMassa->unidade }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>Informações Relacionadas</h3>
        </div>

        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Fornecedor</th>
                            <th>CNPJ</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->fornecedor->nome }}</td>
                            <td>{{ $produto->fornecedor->cnpj }}</td>
                            <td> <a href="{{ $produto->fornecedor->site }}">{{ $produto->fornecedor->site }}</a></td>
                            <td>{{ $produto->fornecedor->uf }}</td>
                            <td>{{ $produto->fornecedor->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Comprimento</th>
                            <th>Largura</th>
                            <th>Altura</th>
                            <th>Unidade de Medida</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->produtoDetalhe->comprimento ?? 'N/A' }}</td>
                            <td>{{ $produto->produtoDetalhe->largura ?? 'N/A' }}</td>
                            <td>{{ $produto->produtoDetalhe->altura ?? 'N/A' }}</td>
                            <td>{{ $produto->produtoDetalhe->unMedidaComprimento->unidade ?? 'N/A' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
