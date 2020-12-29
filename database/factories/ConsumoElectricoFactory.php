<?php

namespace Database\Factories;

use App\Models\ConsumoElectrico;
use App\Models\Dispositivo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsumoElectricoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConsumoElectrico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dispositivo_id' => Dispositivo::all()->random()->id,
            'consumo' => $this->faker->randomFloat(null, 0, 50),
        ];
    }
}
