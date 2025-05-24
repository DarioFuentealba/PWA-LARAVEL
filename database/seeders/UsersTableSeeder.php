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
                'password' => Hash::make('111'),
            ],
            [
                'name' => 'Juan Gómez',
                'email' => 'juan@example.com',
                'password' => Hash::make('222'),
            ],
            [
                'name' => 'Laura Torres',
                'email' => 'laura@example.com',
                'password' => Hash::make('333'),
            ],
            [
                'name' => 'Carlos Ruiz',
                'email' => 'carlos@example.com',
                'password' => Hash::make('444'),
            ],
            [
                'name' => 'Ana López',
                'email' => 'ana@example.com',
                'password' => Hash::make('555'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}