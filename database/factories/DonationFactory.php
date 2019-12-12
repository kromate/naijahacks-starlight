<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donation;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Donation::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(random_int(1, 4)),
        'description' => $faker->paragraph(2),
        'type' => Arr::random(Donation::DONATION_TYPE),
        'image' => Arr::random(['1.jpg', '2.jpg', '3.jpg', null]),
        'quantity' => $quantity = random_int(0, 10),
        'location' => $faker->address,
        'status' => ($quantity == 0) ? Donation::UNAVAILABLE_DONATION : Donation::AVAILABLE_DONATION,
        'donor_id' => User::all()->random()->id,
    ];
});
