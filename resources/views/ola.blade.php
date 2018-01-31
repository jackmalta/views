<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Olá</title>
    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body>
    <h1>Olá</h1>
    @for ($i=0; $i < 10; $i++)
        <h2>Bem vindo ao meu site =) {{$nome}}</h2>
    @endfor

    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
