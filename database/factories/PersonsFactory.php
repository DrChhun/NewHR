<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persons>
 */
class PersonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Name' =>fake()->name(),
            'Phone' =>fake()->phoneNumber(),
            'Email' =>fake()->freeEmail()
        ];
    }
}
