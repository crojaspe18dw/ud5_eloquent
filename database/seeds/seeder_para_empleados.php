<?php

use Illuminate\Database\Seeder;

class seeder_para_empleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
        

            DB::table('empleados')->insert([
            	'nombre'=>Str::random(10),
            	'apellido'=>Str::random(10),
            	'email'=>'correo@correo.com',
            	'telefono'=>Str::random(68,98)
            ]);

        }
    }
}
