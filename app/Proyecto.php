<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }

    public function empleados()
    {
        return $this->belongsToMany('App\Empleado')->withPivot('fechainicio', 'fechafin');
   
    }
}
