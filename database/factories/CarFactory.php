<?php

use Faker\Generator as Faker;

$factory->define(\App\Car::class, function (Faker $faker) {
    return [
        'Year' => $faker->Year('999'),
        'Model'=> $faker->randomElement($array = array ('Sedan', 'Camry', 'Fiesta')),
        'Make' => $faker->randomElement($array = array ('Honda', 'Toyota', 'Ford')),
    ];
});

