<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Dioses',
                'image' => 'dioses.png',
                'content' => 'Dioses los mejores',
            ],
            [
                'name' => 'Diosas',
                'image' => 'diosas.png',
                'content' => 'Diosas las mejores',
            ],
            [
                'name' => 'SemiDioses',
                'image' => 'dioses.png',
                'content' => 'Dioses los mejores',
            ],
            [
                'name' => 'Heroes',
                'image' => 'dioses.png',
                'content' => 'Dioses los mejores',
            ],
            [
                'name' => 'Mounstros',
                'image' => 'dioses.png',
                'content' => 'Dioses los mejores',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
