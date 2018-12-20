<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl,
        'description' => $faker->paragraph,
        'itinerary' => $faker->text,
        'category_id' => $faker->numberBetween($min=1, $max=3),
        

    ];
});
