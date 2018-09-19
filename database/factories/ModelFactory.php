<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'role' => $faker->randomElement(['dalali','loan']),
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\item_sell::class, function (Faker\Generator $faker) {
    return [
        'categoryid' => rand(1,2),
        'itemname' => str_random(30),
        'brand' => str_random(30),
        'amount' => rand(1,15),
        'description' => $faker->text(),
        'location' => str_random(50),
        'phone' => rand(0,12),
        'status' => $faker->randomElement(['unsolved','solved']),
    ];
});
$factory->define(App\item_buy::class, function (Faker\Generator $faker) {
    return [
        'categoryid' => rand(1,2),
        'itemname' => str_random(30),
        'brand' => str_random(30),
        'offeramount' => rand(1,15),
        'description' => $faker->text(),
        'location' => str_random(50),
        'phone' => rand(0,12),
        'status' => $faker->randomElement(['unsolved','solved']),
    ];
});
