<?php

use Illuminate\Database\Seeder;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10 ; $i++) { 

    		DB::table('proyectos')->insert([
    			'nombre' => str_random(10),
                'titulo' => str_random(10),
                'fechainicio'=>date("Y/m/d h:i:s"),
                'fechafin'=>date("Y/m/d h:i:s"),
                'horasestimadas'=>random_int(0,10),
                'created_at'=>date("Y/m/d h:i:s"),
                'updated_at'=>date("Y/m/d h:i:s"),
                'empleado_id'=>random_int(0,20)
    			]);
    	}
    }
}
