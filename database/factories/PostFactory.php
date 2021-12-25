<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {

        $faker = Faker::create('id_ID');
        return [
            'title' => $faker->sentence(mt_rand(2,8)),
            'slug' => $faker->slug(),
            'excerpt' => $faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'category_id' => mt_rand(1,3)
        ];
    }
}
