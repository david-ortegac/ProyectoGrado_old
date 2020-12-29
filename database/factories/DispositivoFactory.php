<?php

namespace Database\Factories;

use App\Models\Dispositivo;
use App\Models\TipoDispositivo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DispositivoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dispositivo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'tipo_dispositivo_id' => TipoDispositivo::all()->random()->id,
            'serial' => $this->faker->unique()->creditCardNumber(),
            'nombre' => $this->faker->name,
            'estado_dispositivo' => $this->faker->randomElement(['on', 'off']),
            'estado' => $this->faker->randomElement([0,1]),
        ];
    }
}
