<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'last_name' => $faker->lastName,
        'email'     => $faker->unique()->safeEmail,
        'password'  => $faker->password,
        //
    ];
});
