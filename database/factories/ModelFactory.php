<?php

$factory->define(App\Auth\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Back\Models\Bar::class, function (Faker\Generator $faker) {
    $title = $faker->company;

    return [
        'slug' => str_slug($title),
        'title' => $title,
        'status' => $faker->boolean(),
    ];
});
