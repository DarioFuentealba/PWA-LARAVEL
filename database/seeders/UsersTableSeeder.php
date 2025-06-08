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
                'name' => 'Fuentes camila',
                'avatar' => 'avatar1.png',
                'email' => 'camila@example.com',
                'password' => Hash::make('11111111'),
            ],
            [
                'name' => 'Riveiro Matias',
                'avatar' => 'avatar2.png',
                'email' => 'matias@example.com',
                'password' => Hash::make('22222222'),
            ],
            [
                'name' => 'Fuentealaba Dario',
                'avatar' => 'avatar3.png',
                'email' => 'dario@example.com',
                'password' => Hash::make('33333333'),
            ],
            [
                'name' => 'Carlos Ruiz',
                'avatar' => 'avatar11.png',
                'email' => 'carlos@example.com',
                'password' => Hash::make('44444444'),
            ],
            [
                'name' => 'capo',
                'avatar' => 'avatar6.png',
                'email' => 'c@c.c',
                'password' => Hash::make('ccc555555'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}