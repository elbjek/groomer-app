<?php

use Faker\Generator as Faker;

$factory->define(App\Appointment::class, function (Faker $faker) {
    return [
        'title' => $faker -> word(),
        'description' => $faker -> sentence( 6,true),
        'groomer_id' => $faker->numberBetween(1, 20)
    ];
});
