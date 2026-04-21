<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Executa o seeding do usuário administrativo inicial.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            [
                'email' => 'eloi.correia@gmail.com',
            ],
            [
                'name' => 'Eloi Correia',
                'email' => 'eloi.correia@gmail.com',
                'password' => Hash::make('Trocar@123'),
                'email_verified_at' => Carbon::now(),
            ]
        );
    }
}