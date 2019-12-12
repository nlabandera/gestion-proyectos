<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EmpleadoProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*factory(App\EmpleadoProyecto::class,8)->create();*/
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>2,
            'proyecto_id'=>5,
            'fechainicio'=>Carbon::parse('2000-12-14'),
            'fechafin'=>Carbon::parse('2021-04-12')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>2,
            'proyecto_id'=>2,
            'fechainicio'=>Carbon::parse('2018-12-12'),
            'fechafin'=>Carbon::parse('2021-12-12')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>2,
            'proyecto_id'=>3,
            'fechainicio'=>Carbon::parse('2015-11-10'),
            'fechafin'=>Carbon::parse('2019-12-31')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>1,
            'proyecto_id'=>5,
            'fechainicio'=>Carbon::parse('2018-12-12'),
            'fechafin'=>Carbon::parse('2019-12-12')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>1,
            'proyecto_id'=>1,
            'fechainicio'=>Carbon::parse('2018-12-12'),
            'fechafin'=>Carbon::parse('2022-03-02')
        ]);
        DB::table('empleado_proyecto')->insert([
            'empleado_id'=>7,
            'proyecto_id'=>3,
            'fechainicio'=>Carbon::parse('2018-12-12'),
            'fechafin'=>Carbon::parse('2021-06-09')
        ]);
    }
}
