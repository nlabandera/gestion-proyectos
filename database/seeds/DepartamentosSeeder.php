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
        factory(App\Departamento::class,2)->create();
        /*DB::table('departamentos')->insert([
            'nombre' => 'I+d+i'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Desarrollo'
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Administracion'
        ]);*/
    }
}
