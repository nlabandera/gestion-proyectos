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
        //factory(App\Departamento::class,3)->create();
        DB::table('departamentos')->insert([
            'nombre' => 'I+d+i',
            'empleado_id'=>1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Contabilidad',
            'empleado_id'=>2
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Administracion',
            'empleado_id'=>3
        ]);
    }
}
