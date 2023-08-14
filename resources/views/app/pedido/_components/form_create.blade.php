<form method="post" action="{{ route('pedido.store') }}">
    @csrf

    <select name="cliente_cpf" class="borda-preta">
        <option>-- Selecione o Cliente --</option>

        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->cpf }}" {{ old('cliente_cpf') == $cliente->cpf ? 'selected' : '' }}>
                {{ $cliente->nome }}</option>
        @endforeach

    </select>
    {{ $errors->has('cliente_cpf') ? $errors->first('cliente_cpf') : '' }}

    <button type="submit" class="borda-preta">Salvar</button>

</form>
