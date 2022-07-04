<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return void
     */
    public function run()
    {
        return [
            'data' => $this->faker->date(),
            'horario' =>  $this->faker->time(),
            'assunto' =>  $this->faker->words(),
            'descricao' =>  $this->faker->sentence(),
            'status' =>  $this->faker->boolean(),
        ];
    }

  
}
