<?php

namespace Database\Factories;

use App\Models\groups;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\subjects;
use Faker\Core\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class teachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake ()->name(),
            'sexo' => fake()->randomElement(['Mujer','Hombre']),
            'edad' => fake()->randomElement(['32','28','42','38','45','30']),
            'direccion' => fake()->sentence(),
            'telefono' => fake()->randomNumber(8, true),

            'subject_id' => subjects::all()->random()->id,
            'group_id' => groups::all()->random()->id,
        ];
    }
}
