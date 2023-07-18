<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{   
    protected $model =Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker =$this->faker;
        return [
            'Nombre' => $faker->name(),
            'fecha_nacimiento' => $faker->date(),
            'correo' => $faker->unique()->safeEmail(),
            'genero' => $faker->randomElement(['masculino','femenino','otro']), 
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
