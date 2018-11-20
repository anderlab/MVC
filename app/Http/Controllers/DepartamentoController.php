<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
  public function index ()
  {
     
      $departamentos = Departamento::all();
      return view ('departamentos.index',['departamentos' => $departamentos]);
  }  

  public function get ($id)
  {
      $departamento=Departamento::find($id);
      return view ('departamentos.departamento',['departamento'=>$departamento]);
  }
}
