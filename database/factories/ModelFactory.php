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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
<<<<<<< HEAD

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    // Creating local faker for our factories.
    $persianFaker = Faker\Factory::create("fa_IR");

    return [
        'category' => $persianFaker->realText(10, 1),
        'created_by' => rand(0, 50),
        'uploaded_at' => $faker->dateTime($max = 'now'),
        'uploaded_by' => rand(0, 50),
        'revisions' => rand(0, 50),
        'created_at' => $faker->dateTime($max = 'now'),
        'updated_at' => $faker->dateTime($max = 'now'),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    // Creating local faker for our factories.
    $persianFaker = Faker\Factory::create("fa_IR");

    return [
        'title' => $persianFaker->realText(10, 1),
        'body' => $persianFaker->realText(10, 1),
        'created_by' => rand(0, 50),
        'revisions' => rand(0, 50),
        'created_at' => $faker->dateTime($max = 'now'),
        'updated_at' => $faker->dateTime($max = 'now'),
    ];
});

$factory->define(App\Message::class, function (Faker\Generator $faker) {
    // Creating local faker for our factories.
    $persianFaker = Faker\Factory::create("fa_IR");

    return [
        'full_name' => $persianFaker->firstNameMale + ' ' + $persianFaker->lastName,
        'email' => $faker->unique()->safeEmail,
        'subject' => $persianFaker->realText(10, 1),
        'message' => $persianFaker->realText(10, 1),
        'tracking_code' => rand(0, 50),
        'created_at' => $faker->dateTime($max = 'now'),
        'updated_at' => $faker->dateTime($max = 'now'),
    ];
});
=======
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
