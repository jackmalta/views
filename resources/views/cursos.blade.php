<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cursos</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
    <h1>Lista de Cursos</h1>

      <ul class="list-group">
      @foreach ($cursos as $curso)
        <li class="list-group-item"> {{$curso}}</li>
      @endforeach
      </ul>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
