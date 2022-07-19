<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actuante>
 */
class ActuanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tipo_actuante = $this->faker->unique()->word(20);
        return [
            //
            'tipo_actuante' => $tipo_actuante,
            'slug' => Str::slug($tipo_actuante)
        ];
    }
}
