<?php

$factory->define(App\Core\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'name' => $faker->firstName,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
