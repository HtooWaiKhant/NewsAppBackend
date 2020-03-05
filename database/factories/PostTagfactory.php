<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostTag;
use Faker\Generator as Faker;

$factory->define(PostTag::class, function (Faker $faker) {
    return[
        'post_id' => $faker->unique()->numberBetween(1, 1500),
        'tag_id' => $faker->numberBetween(1, 50)
    ];
});
