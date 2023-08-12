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
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Tamanho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>
                                {{ $produto->peso }} -
                                {{ $produto->unMedidaMassa->unidade }}
                            </td>
                            <td>
                                {{ $produto->comprimento }} x
                                {{ $produto->largura }} x
                                {{ $produto->altura }}
                                {{ $produto->unMedidaComprimento->unidade }}
                            </td>
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
        </div>

    </div>

@endsection
