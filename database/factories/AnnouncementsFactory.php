<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\App\Announcements;
use Faker\Generator as Faker;

$factory->define(Announcements::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'title' => $faker->sentence(),
        'comments' => $faker->paragraph(),
        'start_date' => date('Y-m-d'),
        'expiration_date' => date('Y-m-d', strtotime('+7 days')),
        'active' => true,
    ];
});
