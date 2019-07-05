<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'state_number' => $faker->regexify('[A-Z]{1}[0-9]{3}[A-Z]{2}[0-9]{2}'),
        'place' => $faker->unique()->numberBetween(1, 50),
        'full_name' => $faker->name,
        'passport_series' => $faker->numberBetween(1111, 9999),
        'passport_number' => $faker->numberBetween(111111, 666666),
    ];
});
