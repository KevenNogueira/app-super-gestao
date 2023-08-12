@if (isset($produto->id))
    <form method="post" action="{{ route('produto.update', ['produto' => $produto->id]) }}">
        @csrf
        @method('PUT')
    @else
        <form method="post" action="{{ route('produto.store') }}">
            @csrf
@endif

<select name="fornecedor_cnpj" class="borda-preta">
    <option>-- Selecione o Fornecedor --</option>

    @foreach ($fornecedores as $fornecedor)
        <option value="{{ $fornecedor->cnpj }}"
            {{ ($produto->fornecedor_cnpj ?? old('fornecedor_cnpj')) == $fornecedor->cnpj ? 'selected' : '' }}>
            {{ $fornecedor->nome }}</option>
    @endforeach

</select>
{{ $errors->has('fornecedor_cnpj') ? $errors->first('fornecedor_cnpj') : '' }}

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

<input type="text" name="comprimento" value="{{ $produto->comprimento ?? old('comprimento') }}"
    placeholder="Comprimento" class="borda-preta">
{{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

<input type="text" name="largura" value="{{ $produto->largura ?? old('largura') }}" placeholder="Largura"
    class="borda-preta">
{{ $errors->has('largura') ? $errors->first('largura') : '' }}

<input type="text" name="altura" value="{{ $produto->altura ?? old('altura') }}" placeholder="altura"
    class="borda-preta">
{{ $errors->has('altura') ? $errors->first('altura') : '' }}

<select name="un_medida_comprimento_id">
    <option>-- Selecione a Unidade de Medida --</option>

    @foreach ($unidadesComprimento as $unidadeComprimento)
        <option value="{{ $unidadeComprimento->id }}"
            {{ ($produto->un_medida_comprimento_id ?? old('un_medida_comprimento_id')) == $unidadeComprimento->id ? 'selected' : '' }}>
            {{ $unidadeComprimento->descricao }}</option>
    @endforeach

</select>
{{ $errors->has('un_medida_comprimento_id') ? $errors->first('un_medida_comprimento_id') : '' }}

<button type="submit" class="borda-preta">Salvar</button>
</form>
