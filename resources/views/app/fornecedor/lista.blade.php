@extends('app.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-app">
            <h3>Fornecedores</h3>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.cadastro') }}">Cadastro</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
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
                            <th>Visualizar</th>
                            <th>Exclusão</th>
                            <th>Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->cnpj }}</td>
                                <td> <a href="{{ $fornecedor->site }}">{{ $fornecedor->site }}</a></td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td><a href="{{ route('app.fornecedor.visualizar', $fornecedor->cnpj) }}">Visualizar</a></td>
                                <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->cnpj) }}">Exclusão</a></td>
                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->cnpj) }}">Edição</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $fornecedores->appends($request)->links() }}
                {{ $fornecedores->currentPage() }}
            </div>
        </div>
    </div>
@endsection
