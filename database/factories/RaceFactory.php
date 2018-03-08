<?php

use Faker\Generator as Faker;

$factory->define(App\Race::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, \App\User::count()),
        'vehicle_id' => $faker->numberBetween(1, \App\Vehicle::count()),
        'track_id' => $faker->numberBetween(1, \App\Track::count()),
        'time_ms' => $faker->numberBetween(50000, 70000)
    ];
});
