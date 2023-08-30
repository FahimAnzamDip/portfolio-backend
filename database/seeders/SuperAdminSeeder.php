<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([
            'name'     => 'Administrator',
            'email'    => 'super.admin@test.com',
            'password' => Hash::make(12345678),
        ]);
    }
}
