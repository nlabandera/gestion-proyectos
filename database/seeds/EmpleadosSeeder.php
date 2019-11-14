<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => 'Nerea',
            'apellido' => 'Labandera',
            'email' => 'nlabandera@hotmail.com',
            'telefono'=>'650917850'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Koldo',
            'apellido' => 'Intxausti',
            'email' => 'kintxausti@hotmail.com',
            'telefono'=>'655214587'
        ]);
    }
}
