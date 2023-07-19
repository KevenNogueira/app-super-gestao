<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <link rel="icon" href="{{ asset('img/logo.png') }}" />
</head>

<body>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
    @include('site.layouts._partials.footer')
</body>

</html>
