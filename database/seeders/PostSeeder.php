<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::factory(5)->create();
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {
            DB::table('post')->insert([
                'title' => $faker->sentence(mt_rand(2,8)),
                'slug' => $faker->slug(),
                'excerpt' => $faker->paragraph(),
                'body' => collect($faker->paragraphs(mt_rand(5, 10)))->map(fn($p) => "<p>$p</p>")->implode(''),
                'category_id' => mt_rand(1,2)
            ]);
        }
    }
}
