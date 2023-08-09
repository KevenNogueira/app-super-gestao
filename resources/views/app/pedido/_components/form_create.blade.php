<form method="post" action="{{ route('pedido.store') }}">
    @csrf

    <select name="cliente_id" class="borda-preta">
        <option>-- Selecione o Cliente --</option>

        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}"
                {{ ($pedido->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>
                {{ $cliente->nome }}</option>
        @endforeach

    </select>
    {{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}

    <button type="submit" class="borda-preta">Salvar</button>

</form>
