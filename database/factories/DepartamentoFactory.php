<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Departamento;
use Faker\Generator as Faker;

$factory->define(Departamento::class, function (Faker $faker) {
    return [
        'nombre' => $faker->jobTitle,
        'empleado_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
