<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('rahasia'),
            'role' => 'Super Admin'
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rahasia'),
            'role' => 'Admin'
        ]);
        User::factory()->create([
            'name' => 'Mr. Guest',
            'email' => 'guest@guest.com',
            'password' => bcrypt('guest'),
            'role' => 'Guest'
        ]);
    }
}
