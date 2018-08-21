<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return ['title'  => $faker->name,
            'awards' => $faker->numberbetween(1,10),
            'release_date' => $faker->dateTimeBetween($startDate = '-70 years', $endDate = 'now', $timezone = null),
            'revenue' => $faker->randomFloat($nbMaxDecimals = 0, $min = 0, $max = 10),
        //
    ];
});
