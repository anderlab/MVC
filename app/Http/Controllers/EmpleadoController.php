<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
  public function index ()
  {
    $empleados = Empleado::all();
    return view ('empleados.index',['empleados' => $empleados]);
  }

  public function get ($id)
  {
      $empleado=Empleado::find($id);
      return view ('empleados.empleado',['empleado'=>$empleado]);
  }
}
