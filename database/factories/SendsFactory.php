<?php

use Faker\Generator as Faker;

$factory->define(App\Sends::class, function (Faker $faker) {
    return [
        'nombreDest' => $faker->firstName,
        'remitente' => $faker->streetAddress,
        'destino' => $faker->streetAddress,
        'peso' => $faker->numberBetween(1,10),
        'dimensiones' => $faker->text(5),
        'costo' => $faker->numberBetween(1,20),
        'user_id' => $faker->numberBetween(1,5),
        'estado' => $faker->boolean(false)
    ];
});
