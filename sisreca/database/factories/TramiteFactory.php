<?php

namespace Database\Factories;

use App\Models\Contribuyente;
use App\Models\Declaracion;
use App\Models\Refrendo;
use App\Models\Solicitud_servi;
use App\Models\Tipo_tram;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tramite>
 */
class TramiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $descrip = $this->faker->unique()->sentence();
        return [
            //
            'descrip' => $descrip,
            'slug' => Str::slug($descrip),
            'tipo_trams_id' => Tipo_tram::all()->random()->id,
            'contribuyentes_id' => Contribuyente::all()->random()->id,
            'declaraciones_id' => Declaracion::all()->random()->id,
            'solicitud_servis_id' => Solicitud_servi::all()->random()->id,
            'refrendos_id' => Refrendo::all()->random()->id,
        ];
    }
}
