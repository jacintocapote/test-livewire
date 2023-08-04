<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = [
            'bmw',
            'audi',
            'mercedes',
            'honda',
            'nissan',
            'ford',
            'toyota',
            'jeep',
        ];

        $models = [
            'A1 XXX',
            'A2 XXX',
            'B1 XXX',
            'B2 XXX',
            'C3 XXX',
            'Z5 XXX',
        ];

        return [
            'brand' => fake()->randomElement($brands),
            'model' => fake()->randomElement($models),
        ];
    }
}
