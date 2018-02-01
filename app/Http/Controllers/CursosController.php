<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //Action - Ela recebe e trata a requisição

    private $cursos = array('Lógica','WEB','Java','Ruby');

    public function index()
    {
      $cursos = $this->cursos;
      return view('cursos.index', compact('cursos'));
    }

    public function show($index)
    {
      # code...
      $cursos = $this->cursos[$index];
      return view('cursos.show', compact('cursos'));
    }
}
