<?php

use Faker\Generator as Faker;

$factory->define(App\Photos::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName(),
        'alt'=>$faker->name,
        'title'=>$faker->text,
        'path'=>$faker->name

    ];
});
