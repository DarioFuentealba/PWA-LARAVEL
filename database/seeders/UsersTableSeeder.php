<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Federico Paillelef',
                'email' => 'federico@example.com',
                'password' => Hash::make('ccc111111'),
            ],
            [
                'name' => 'Juan Gómez',
                'email' => 'juan@example.com',
                'password' => Hash::make('ccc222222'),
            ],
            [
                'name' => 'Laura Torres',
                'email' => 'laura@example.com',
                'password' => Hash::make('ccc333333'),
            ],
            [
                'name' => 'Carlos Ruiz',
                'email' => 'carlos@example.com',
                'password' => Hash::make('ccc444444'),
            ],
            [
                'name' => 'capo',
                'email' => 'c@c.c',
                'password' => Hash::make('ccc555555'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}