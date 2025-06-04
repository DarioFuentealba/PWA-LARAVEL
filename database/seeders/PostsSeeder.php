<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => '1',
                'category_id' => '1',
                'title' => 'Post 1',
                'poster' => 'dioses.png',
                'habilitated' => '1',
                'content' => 'Dioses los mejores',
            ],
            [
                'user_id' => '2',
                'category_id' => '1',
                'title' => 'Post 2',
                'poster' => 'dioses.png',
                'habilitated' => '1',
                'content' => 'Dioses los mejores',
            ],
            [
                'user_id' => '2',
                'category_id' => '1',
                'title' => 'Post 3',
                'poster' => 'dioses.png',
                'habilitated' => '1',
                'content' => 'Dioses los mejores',
            ],
            [
                'user_id' => 'Heroes',
                'image' => 'dioses.png',
                'content' => 'Dioses los mejores',
            ],
            [
                'user_id' => '3',
                'category_id' => '1',
                'title' => 'Post 4',
                'poster' => 'dioses.png',
                'habilitated' => '1',
                'content' => 'Dioses los mejores',
            ],
            [
                'user_id' => '3',
                'category_id' => '3',
                'title' => 'Post 5',
                'poster' => 'dioses.png',
                'habilitated' => '1',
                'content' => 'Dioses los mejores',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
