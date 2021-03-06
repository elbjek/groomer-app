<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->freeEmail,
        'password' => $faker->password,
        'phone_number' => $faker->phoneNumber
    ];
});
