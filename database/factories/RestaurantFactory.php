<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->streetAddress,
        'ciudad' => $faker->state,
        'pais' => $faker->country
    ];
});
