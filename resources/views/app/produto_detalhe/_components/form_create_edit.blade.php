@if (isset($produto_detalhe->id))
    <form method="post" action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}">
        @csrf
        @method('PUT')

        <input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}"
            placeholder="ID do Produto" class="borda-preta" disabled>
        {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
    @else
        <form method="post" action="{{ route('produto-detalhe.store') }}">
            @csrf

            <input type="text" name="produto_id" value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}"
                placeholder="ID do Produto" class="borda-preta">
            {{ $errors->has('produto_id') ? $errors->first('produto_id') : '' }}
@endif

<input type="text" name="comprimento" value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}"
    placeholder="Comprimento" class="borda-preta">
{{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

<input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}" placeholder="Largura"
    class="borda-preta">
{{ $errors->has('largura') ? $errors->first('largura') : '' }}

<input type="text" name="altura" value="{{ $produto_detalhe->altura ?? old('altura') }}" placeholder="altura"
    class="borda-preta">
{{ $errors->has('altura') ? $errors->first('altura') : '' }}

<select name="un_medida_comprimento_id">
    <option>-- Selecione a Unidade de Medida --</option>

    @foreach ($unidadesComprimento as $unidadeComprimento)
        <option value="{{ $unidadeComprimento->id }}"
            {{ ($produto_detalhe->un_medida_comprimento_id ?? old('un_medida_comprimento_id')) == $unidadeComprimento->id ? 'selected' : '' }}>
            {{ $unidadeComprimento->descricao }}</option>
    @endforeach

</select>
{{ $errors->has('un_medida_comprimento_id') ? $errors->first('un_medida_comprimento_id') : '' }}

<button type="submit" class="borda-preta">Salvar</button>
<form>
