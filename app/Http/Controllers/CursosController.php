<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    //Action - Ela recebe e trata a requisição
    public function index()
    {
      $cursos = ['Java','HTML','Ruby','Yellow'];
      return view('cursos', compact('cursos'));
    }
}
