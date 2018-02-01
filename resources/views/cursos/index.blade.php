@extends('/layouts.master')
@section('title', 'Cursos')
@section('conteudo')

  <h1>Cursos</h1>
  @foreach ($cursos as $curso)
    <li class="list-group-item">
      <a href="/cursos/{{ $loop->index }}"> {{ $curso }}</a>
    </li>
{{-- <li class="list-group-item"><a href="/cursos/{{ $loop->index }}">{{ $curso }}</a></li> --}}
  @endforeach
@endsection
