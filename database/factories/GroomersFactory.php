<?php

use Faker\Generator as Faker;

$factory->define(App\Groomer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->freeEmail,
        'password' => $faker->password,
        'client_id' => $faker->numberBetween(1, 20)
    ];
});



