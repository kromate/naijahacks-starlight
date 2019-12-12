<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Donation;
use App\Donor;
use App\User;
use App\Transacton;
use Faker\Generator as Faker;

$factory->define(Transacton::class, function (Faker $faker) {
    $donor = Donor::has('donations')->get()->random();
    $reciever = User::all()->except($donor->id)->random();
    $donation = Donation::where('status', Donation::AVAILABLE_DONATION)->get()->random();
    return [
        'donation_id' => $donation->id,
        'receiver_id' => $reciever->id,
        'quantity' => $faker->numberBetween(1, 3),
    ];
});
