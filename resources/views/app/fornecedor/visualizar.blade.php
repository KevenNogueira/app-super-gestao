@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Visualização</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.consulta') }}">Voltar</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div class="box-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $fornecedor->nome }}</td>
                            <td>{{ $fornecedor->cnpj }}</td>
                            <td> <a href="{{ $fornecedor->site }}">{{ $fornecedor->site }}</a></td>
                            <td>{{ $fornecedor->uf }}</td>
                            <td>{{ $fornecedor->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div>
            <h3>Produtos Relacionados</h3>
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
                        @foreach ($fornecedor->produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }} {{ $produto->unMedidaMassa->unidade }}</td>
                                <td>
                                    {{ $produto->comprimento }} x
                                    {{ $produto->largura }} x
                                    {{ $produto->altura }}
                                    {{ $produto->unMedidaComprimento->unidade }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
