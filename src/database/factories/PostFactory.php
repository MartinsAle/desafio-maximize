<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->word(),
            'descricao' => $this->faker->sentence(),
            'texto_completo' => $this->faker->paragraph(),
            'imagem' => $this->faker->image('public/images', 640, 480, null, false),
        ];
    }
}
