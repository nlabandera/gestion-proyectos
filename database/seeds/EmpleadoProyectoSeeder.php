<?php

use Illuminate\Database\Seeder;

class EmpleadoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\EmpleadoProyecto::class,8)->create();
    }
}
