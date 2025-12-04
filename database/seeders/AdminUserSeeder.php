<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'PAAB Admin',
            'email' => 'admin@paab.org.zw',
            'password' => Hash::make('PAAB@2025'),
            'email_verified_at' => now(),
        ]);
    }
}