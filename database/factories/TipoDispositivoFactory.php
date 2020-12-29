<?php

namespace Database\Factories;

use App\Models\TipoDispositivo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoDispositivoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoDispositivo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->sentence(),
        ];
    }
}
