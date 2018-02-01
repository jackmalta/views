<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="container">
        <div class="page-header">
          <h1>Cabeçalho</h1>
          <p>Para exibir o conteúdo, é necessário definir o conteudo dentro do @@section('content') e @@endsection</p>
        </div>
          @yield('conteudo')

        <div class="footer">
          <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
        </div>
    </div>

    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
