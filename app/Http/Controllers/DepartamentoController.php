<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
  public function index ()
  {
      return view ('departamentos.index');
  }

  public function get ($id)
  {
      return view ('departamentos.departamento');
  }
}
