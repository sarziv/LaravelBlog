<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Articles;
use Faker\Generator as Faker;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->text(8),
        'article_tags' => $faker->text(5),
        'image' => $faker->text(10),
        'article_info' => $faker->paragraph,
        'created_at' => $faker->time(now())
    ];
});
