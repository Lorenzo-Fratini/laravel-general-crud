<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {

    $team1 = $faker -> word;
    $team2 = $faker -> word;

    $point1 = rand(0, 30);
    $point2 = rand(0, 30);

    $result = $point1 >= $point2 ? 0 : 1;

    return [
        'team1' => $team1,
        'team2' => $team2,
        'point1' => $point1,
        'point2' => $point2,
        'result' => $result,
    ];
});
