<?php

use Faker\Generator as Faker;

$factory->define(\App\Goods::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName(),
        'short_description'=>$faker->text,
        'description'=>$faker->text(),
        'icon'=>$faker->text
    ];
});
