<?php

namespace Database\Factories;

use App\Models\Tramite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adjunto>
 */
class AdjuntoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $url = $this->faker->word(20);
        $tamanio = $this->faker->word(20);
        $fecha_reg = $this->faker->word(20);
        return [
            //
            'url' => $url,
            'slug' => Str::slug($url),
            'tamanio' => $tamanio,
            'slug' => Str::slug($tamanio),
            'fecha_reg' => $fecha_reg,
            'slug' => Str::slug($fecha_reg),
            'tramites_id' => Tramite::all()->random()->id,
        ];
    }
}
