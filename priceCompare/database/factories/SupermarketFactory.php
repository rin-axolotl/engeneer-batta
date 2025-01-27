<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supermarket>
 */
class SupermarketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->name(),
            "introduction"=>fake()->paragraphs(random_int(5, 10), true),
            "location"=>fake()->words(random_int(4, 10), true),
        ];
    }
}
