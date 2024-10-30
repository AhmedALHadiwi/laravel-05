<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ahmed ALHadiwi',
            'email' => 'ahmedalhadiwi04@gmail.com',
            'mobile' => '01224863072',
            'password' => Hash::make('password'),
            'roles' => 'admin',
        ]);
    }
}
