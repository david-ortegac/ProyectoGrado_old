<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => User::all()->random()->id,
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->sentence(),
            'estado' => $this->faker->randomElement([0,1]),
        ];
    }
}
