<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'identification_document'=>$this->faker->randomFloat(2, 0, 1000),
            'address' => $this->faker->address,
            'phone' => $this->faker->phoneNumber, 
            'email' => $this->faker->unique()->safeEmail,
            'registeredby' => $this->faker->word,
        ];
    }
}
