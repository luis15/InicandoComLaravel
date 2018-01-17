<html>
<head>
  <title>appTeste - @yield('titulo')</title>
</head>
<body>
  <header>
    @section('navbar')
    <p>Aqui teremos o navbar</p>
      @include('layout._includes._navbar')
    @show
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
