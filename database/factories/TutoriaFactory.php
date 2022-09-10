<?php

namespace Database\Factories;

use App\Models\diaHabil;
use App\Models\profesor;
use App\Models\tutoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class TutoriaFactory extends Factory
{
    /**
     * The name of the factory´s corresponding model.
     *
     * @var string
     */
    protected $model = tutoria::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alumno' => $this->faker->name(),
            'idProfesor' => profesor::all()->random()->id,
            'idDia' => diaHabil::all()->random()->id,
            'hora' => $this->faker->randomElement([10, 12, 16, 18]),
            'asunto' => $this->faker->paragraph(),
        ];
    }
}
