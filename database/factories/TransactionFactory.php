<?php

namespace Database\Factories;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'value' => fake()->numberBetween(1, 15000),
            'description' => Str::random(255),
            'from' => Str::random(50),
            'date' => fake()->date(),

            'user_id' => User::factory() // Create an user and apply the created id to user_id column.
        ];
    }
}