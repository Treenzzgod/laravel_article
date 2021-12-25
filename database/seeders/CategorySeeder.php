<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // Category::factory()->create();

        DB::table('category')->insert([
            ['nama' => 'jantung',
            'slug' => 'jantung'],
            ['nama' => 'mata',
            'slug' => 'mata'],
            ['nama' => 'Paru-Paru',
            'slug' => 'paru-paru']
        ]);
    }
}
