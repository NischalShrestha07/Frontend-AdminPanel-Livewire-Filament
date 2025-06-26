<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->name(),
            'icon_class' => $this->faker->word(),
            'short_desc' => $this->faker->paragraph(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->boolean()
        ];
    }
}
