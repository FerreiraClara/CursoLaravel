<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- yield - recurso do blade que permite alterar o titulo da pagina conforme a view for mudando -->
     <!-- titulo é um parametro passado, que, caso não exista, retorna nulo/nada -->
    <title>Sistema de Presença - @yield('titulo')</title>
</head>
<body>
    <header>
        @section('navbar')
            @include('layout._includes._navbar')
        @show
        <!-- show permite que o sistema continue a imprimir os códigos abaixo -->
    </header>
    <main>
        @yield('conteudo')
    </main>
    <footer>
        @section('footer')
            @include('layout._includes._footer')
        @show
    </footer>
</body>
</html>