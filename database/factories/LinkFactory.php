<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Link;
use Faker\Generator as Faker;

class LinkFactory extends Factory
{
    // $factory->define(Link::class, function (Faker $faker) {
    public function definition()
        {
        return [
            'title' => substr($this->faker->sentence(2), 0, -1),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
    // });
}