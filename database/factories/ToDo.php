<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ToDo;
use Faker\Generator as Faker;

$factory->define(ToDo::class, function (Faker $faker) {
    return [
        'text' => $faker->text
    ];
});
