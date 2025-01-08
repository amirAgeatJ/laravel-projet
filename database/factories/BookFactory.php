<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        return [
            'title'       => $this->faker->sentence(3),
            'author'      => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'price'       => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
