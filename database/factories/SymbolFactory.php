<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Symbol>
 */
class SymbolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word,
            'name' => $this->faker->name,
            'short_name' => $this->faker->name,
            'security_type' => '103',
            'type' => $this->faker->randomElement(['index', 'option', 'future']),
            'trade_start' => $this->faker->date(),
            'trade_end' => $this->faker->date(),
            'deriv_month' => $this->faker->date(),
            'trade_unit' => $this->faker->numberBetween(1, 100),
            'underlyer' => null,
        ];
    }
}
