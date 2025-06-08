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
                'borde' => 'borde1.png',
                'email' => 'camila@example.com',
                'password' => Hash::make('11111111'),
            ],
            [
                'name' => 'Riveiro Matias',
                'borde' => 'borde2.png',
                'email' => 'matias@example.com',
                'password' => Hash::make('22222222'),
            ],
            [
                'name' => 'Fuentealaba Dario',
                'borde' => 'borde3.png',
                'email' => 'dario@example.com',
                'password' => Hash::make('33333333'),
            ],
            [
                'name' => 'Carlos Ruiz',
                'borde' => 'borde4.png',
                'email' => 'carlos@example.com',
                'password' => Hash::make('44444444'),
            ],
            [
                'name' => 'capo',
                'borde' => 'borde5.png',
                'email' => 'c@c.c',
                'password' => Hash::make('55555555'),
            ],
            [
                'name' => 'Camilo Milo',
                'borde' => 'borde6.png',
                'email' => 'c@m.c',
                'password' => Hash::make('66666666'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}