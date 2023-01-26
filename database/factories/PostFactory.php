<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use App\Category;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $this->faker->name,
        'content' => $this->faker->text,
        'image' => $this->faker->imageUrl(),
        'likes' => random_int(1, 2000),
        'is_published' => 1,
        'category_id' => Category::get()->random()->id

    ];
});
