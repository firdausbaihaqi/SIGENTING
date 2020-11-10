<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ibu;
use Faker\Generator as Faker;

$factory->define(Ibu::class, function (Faker $faker) {
    return [
        'nama'      => $faker->name($gender = 'female'),
        'alamat'    => $faker->address,
        'username' => $faker->userName,
        'no_hp'     => $faker->phoneNumber
    ];
});
