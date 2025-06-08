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
                'content' => 'Los poderosos del Olimpo',
            ],
            [
                'name' => 'Diosas',
                'image' => 'diosas.png',
                'content' => 'Diosas las mejores',
            ],
            [
                'name' => 'SemiDioses',
                'image' => 'hercules.jpg',
                'content' => 'Hijos de dioses y humanos',
            ],
            [
                'name' => 'Heroes',
                'image' => 'teseo.jpg',
                'content' => 'Valientes mortales',
            ],
            [
                'name' => 'Monstruos',
                'image' => 'kraken-gigante.jpg',
                'content' => 'Criaturas temibles',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
