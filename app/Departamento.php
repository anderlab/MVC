<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
    public function jefe()
    {
        return $this->belongsTo('App\Empleado','jefe_id');
    }
}
