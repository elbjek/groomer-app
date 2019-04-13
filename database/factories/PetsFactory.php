<?php

use Faker\Generator as Faker;

$factory->define(App\Pet::class, function (Faker $faker) {
//    $genderValues = ['male','female'];
//    $sizeValues = ['small', 'medium', 'large'];
    return [
        'name' => $faker->name,
//        'gender' => shuffle(size('male','female')),
//        'size' => $faker->randomElements($sizeValues = array ('small','medium','large'), $count = 1),
        'weight' => $faker->numberBetween(1,20),
        'client_id' => $faker->numberBetween(1, 20)
    ];
});

//$arrayValues = ['low', 'medium', 'hight'];
//
//return [
//    'name' => $faker->name,
//    'damage' => $arrayValues[rand(0,2)]
//];
