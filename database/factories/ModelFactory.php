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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'country' => 233,
        'dateofbirth' => $faker->dateTime,
        'role_id' => rand(2,5),
        'password' => bcrypt('123456!'),
        'avatar' => env('APP_URL').'/images/avatar/user' .rand(1,20). '.jpg',
        'remember_token' => str_random(10),
    ];
});
