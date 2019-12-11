<?php

use Illuminate\Database\Seeder;

class seeder_para_departamentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
        	'nombre'=>'recursos humanos',
        ]);
        DB::table('departamentos')->insert([
        	'nombre'=>'contabilidad',
        ]);
        DB::table('departamentos')->insert([
        	'nombre'=>'marketing',
        ]);
    }
}
