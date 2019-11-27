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
        /*Crear empleados con el tinker
            php artisan make:factory EmpleadoFactory --model=Empleado
            Se crea un Factory en el que hay que insertar los atributos de Empleado
        */
        factory(App\Empleado::class,2)->create();
        
        /*DB::table('empleados')->insert([
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
        DB::table('empleados')->insert([
            'nombre' => 'Xabi',
            'apellido' => 'Artola',
            'email' => 'xartola@hotmail.com',
            'telefono'=>'658547555'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'David',
            'apellido' => 'Belinchon',
            'email' => 'dbelinchon@gmail.com',
            'telefono'=>'699555777'
        ]);

        DB::table('empleados')->insert([
            'nombre' => 'Asier',
            'apellido' => 'Fernandez',
            'email' => 'afernandez@gmail.com',
            'telefono'=>'650917850'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Oihane',
            'apellido' => 'Rico',
            'email' => 'orico@hotmail.com',
            'telefono'=>'698745213'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Rodolfo',
            'apellido' => 'Fernandez',
            'email' => 'rfernandez@hotmail.com',
            'telefono'=>'658741258'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Ramiro',
            'apellido' => 'Gimenez',
            'email' => 'rgimenez@hotmail.com',
            'telefono'=>'654789321'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Anartz',
            'apellido' => 'Etxebeste',
            'email' => 'aetxebeste@hotmail.com',
            'telefono'=>'654782144'
        ]);
        DB::table('empleados')->insert([
            'nombre' => 'Jokin',
            'apellido' => 'Aranburu',
            'email' => 'jaranburu@hotmail.com',
            'telefono'=>'698777552'
        ]);
        */
    }
}
