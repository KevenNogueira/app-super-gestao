<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Keven Nogueira de Souza',
            'email' => 'kevennogueira161@gmail.com',
            'password' => 'keven.tryon'
        ]);
    }
}
