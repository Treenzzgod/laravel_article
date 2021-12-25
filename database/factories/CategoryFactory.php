<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Category::class;
    
    public function definition()
    {
        return [
            ['nama' => 'Jantung'],
            ['nama' => 'Paru-Paru'],
            ['nama' => 'mata']
        ];
    }
}
