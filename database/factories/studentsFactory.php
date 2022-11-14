<?php

namespace Database\Factories;

use App\Models\groups;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\subjects;
use Faker\Core\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\students>
 */
class StudentsFactory extends Factory
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
            'edad' => fake()->randomElement(['15','16','17']),
            'direccion' => fake()->sentence(),
            'telefono' => fake()->randomNumber(8, true),

            'subject_id' => subjects::all()->random()->id,
        ];
    }
}
