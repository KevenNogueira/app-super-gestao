@if (isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('produto.store') }}">
            @csrf
@endif

<select name="fornecedor_id" class="borda-preta">
    <option>-- Selecione o Fornecedor --</option>

    @foreach ($fornecedores as $fornecedor)
        <option value="{{ $fornecedor->id }}"
            {{ ($produto->fornecedor_id ?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : '' }}>
            {{ $fornecedor->nome }}</option>
    @endforeach

</select>
{{ $errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : '' }}

<input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
{{ $errors->has('nome') ? $errors->first('nome') : '' }}

<input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" placeholder="Descrição"
    class="borda-preta">
{{ $errors->has('descricao') ? $errors->first('descricao') : '' }}

<input type="text" name="peso" value="{{ $produto->peso ?? old('peso') }}" placeholder="peso"
    class="borda-preta">
{{ $errors->has('peso') ? $errors->first('peso') : '' }}

<select name="un_medida_massa_id" class="borda-preta">
    <option>-- Selecione a Unidade de Medida --</option>

    @foreach ($unidadesMassa as $unidadeMassa)
        <option value="{{ $unidadeMassa->id }}"
            {{ ($produto->un_medida_massa_id ?? old('un_medida_massa_id')) == $unidadeMassa->id ? 'selected' : '' }}>
            {{ $unidadeMassa->descricao }}</option>
    @endforeach

</select>
{{ $errors->has('un_medida_massa_id') ? $errors->first('un_medida_massa_id') : '' }}

<button type="submit" class="borda-preta">Salvar</button>
</form>
