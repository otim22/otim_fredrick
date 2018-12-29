<?php

use App\Like;
use App\Post;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Like::class, function (Faker $faker) {
    return [
        'likeable_type' => 'App\Post',
        'likeable_id' => function () {
            return factory(Post::class)->create()->id;
        },
        'author_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
