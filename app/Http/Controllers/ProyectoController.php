<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{

  public function index ()
  {
      $proyectos = Proyecto::all();
      return view ('proyectos.index',['proyectos' => $proyectos]);
  }

  public function get ($id)
  {
      $proyecto=Proyecto::find($id);
      return view ('proyectos.proyecto',['proyecto' => $proyecto]);
  }

}
