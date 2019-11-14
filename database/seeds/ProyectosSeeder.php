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
        DB::table('proyectos')->insert([
            'nombre' => '',
            'titulo' => '',
            'fechainicio' => '',
            'fechafin'=>'',
            'horasestimadas'=>
        ]);
        
    }
}
