<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{

  public function index ()
  {
      return view ('proyectos.index');
  }

  public function get ($id)
  {
      return view ('proyectos.proyecto');
  }

}
