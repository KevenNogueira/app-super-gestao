@if (isset($cliente->id))
    <form method="post" action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('cliente.store') }}">
            @csrf
@endif

<input type="text" name="nome" value="{{ $cliente->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<input type="text" name="cpf" value="{{ $cliente->cpf ?? old('cpf') }}" placeholder="CPF" class="borda-preta">
{{ $errors->has('cpf') ? $errors->first('cpf') : '' }}

<input type="email" name="email" value="{{ $cliente->email ?? old('email') }}" placeholder="E-mail"
    class="borda-preta">
{{ $errors->has('email') ? $errors->first('email') : '' }}

<input type="text" name="telefone" value="{{ $cliente->telefone ?? old('telefone') }}"
    placeholder="Telefone Ex: (75) 95028-2777" class="borda-preta">
{{ $errors->has('telefone') ? $errors->first('telefone') : '' }}

<button type="submit" class="borda-preta">Salvar</button>

<form>
