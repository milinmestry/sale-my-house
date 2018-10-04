<?php

use Faker\Generator as Faker;

$factory->define(App\Seller::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigitNotNull,
        'permanent_address' => $faker->address,
        'present_address' => $faker->address,
        'alternate_email' => $faker->email,
        'contact_landline' => $faker->phoneNumber
    ];
});
