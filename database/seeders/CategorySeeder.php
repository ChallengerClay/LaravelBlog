<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Sports',
        ]);

        Category::create([
            'name' => 'Economy',
        ]);

        Category::create([
            'name' => 'Celebrities',
        ]);

        Category::create([
            'name' => 'Technology',
        ]);

        Category::create([
            'name' => 'Health',
        ]);

        Category::create([
            'name' => 'Lifestyle',
        ]);
    }
}
