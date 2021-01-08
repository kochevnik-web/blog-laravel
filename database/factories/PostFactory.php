<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(rand(2, 3), true),
        'content' => $faker->paragraph(rand(1, 3)),
        'created_at' => now(),
        'updated_at' => now(),
        'rubric_id' => $faker->numberBetween(1, 5)
    ];
});
