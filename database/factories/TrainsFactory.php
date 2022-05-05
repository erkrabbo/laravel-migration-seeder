<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Train;
use Faker\Generator as Faker;

$factory->define(Train::class, function (Faker $faker) {
    $departure = rand( strtotime("1971-01-01 00:00:00"), strtotime("2037-01-01 00:00:00") );
    $dep_to_insert = strval(date('Y-m-d H:i:s', $departure));
    $arrival = rand( $departure, strtotime("2037-01-01 00:00:00") );
    $arr_to_insert = strval(date('Y-m-d H:i:s', $arrival));
    // dd($arr_to_insert, $dep_to_insert);
    return [
        'company' => $faker->word,
        'departure_station' => $faker->city,
        'arrival_station' => $faker->city,
        'departure_timestamp' => "$dep_to_insert",
        'arrival_timestamp' => "$arr_to_insert",
        'wagons' => rand(0, 30),
        'in_time' => $faker->boolean(),
        'deleted' => $faker->boolean()
    ];
});
