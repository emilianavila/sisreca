<?php

namespace Database\Factories;

use App\Models\Contribuyente;
use App\Models\Declaracion;
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
        $tipo_actuante = $this->faker->word(20);
        $participacion = $this->faker->word(20);
        return [
            //
            'tipo_actuante' => $tipo_actuante,
            'slug' => Str::slug($tipo_actuante),
            'participacion' => $participacion,
            'slug' => Str::slug($participacion),
            'contribuyentes_id' => Contribuyente::all()->random()->id,
            'declaraciones_id' => Declaracion::all()->random()->id,
        ];
    }
}
