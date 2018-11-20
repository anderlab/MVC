<?php

use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10 ; $i++) { 

    		DB::table('departamentos')->insert([
    			'codigo' => str_random(10),
                'nombre' => str_random(10),
                'created_at'=>date("Y/m/d h:i:s"),
                'updated_at'=>date("Y/m/d h:i:s")
    			]);
    	}
    }
}
