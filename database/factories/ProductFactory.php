<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'type' => $faker->mimeType,
        'description' => $faker->text,
        'weight' => $faker->numberBetween(0,500),
        'sku' => 'SP4',
        'url_image' => 'whiteSneaker.jpeg',
        'price' => $faker->numberBetween(0,500),
        'quantity' => $faker->numberBetween(0,100),
    ];
});
