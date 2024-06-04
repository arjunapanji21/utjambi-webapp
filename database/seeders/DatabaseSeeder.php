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
            'username' => 'superadmin',
            'email' => 'super@admin.com',
            'password' => bcrypt('rahasia'),
            'role' => 'super admin'
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('rahasia'),
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'Mr. Guest',
            'username' => 'guest',
            'email' => 'guest@guest.com',
            'password' => bcrypt('guest'),
            'role' => 'guest'
        ]);
    }
}
