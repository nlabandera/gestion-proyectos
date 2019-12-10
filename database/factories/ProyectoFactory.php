<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->jobTitle,
        'titulo' => $faker->catchPhrase,
        'fechainicio' => $faker->date($format = 'Y-m-d', $min = 'now'),
        'fechafin' => $faker->date($format = 'Y-m-d', $max = '3 months'),
        'horasestimadas' => $faker->numberBetween($min = 100, $max = 9000),
        'empleado_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
