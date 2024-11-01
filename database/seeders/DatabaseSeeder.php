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

        // User::factory()->create([
        //     'name' => 'Arjuna Panji Prakarsa',
        //     'desc' => 'ICT UT Jambi',
        //     'username' => 'arjuna',
        //     'email' => 'arjunaprakarsa@ecampus.ut.ac.id',
        //     'password' => bcrypt('DeXTreme21'),
        //     'role' => 'superadmin'
        // ]);
        // User::factory()->create([
        //     'name' => 'M. Afiq Kurniawan',
        //     'desc' => 'ICT UT Jambi',
        //     'username' => 'afiq',
        //     'email' => 'afiq@ecampus.ut.ac.id',
        //     'password' => bcrypt('jambi17#'),
        //     'role' => 'author'
        // ]);
        // User::factory()->create([
        //     'name' => 'Admin',
        //     'desc' => 'Admin UT Jambi',
        //     'username' => 'admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('rahasia'),
        //     'role' => 'admin'
        // ]);
        User::factory()->create([
            'name' => 'Witbowo Sulisno',
            'desc' => 'ICT UT Jambi',
            'username' => 'witbowo',
            'email' => 'witbowo@ecampus.ut.ac.id',
            'password' => bcrypt('jambi17#'),
            'role' => 'author'
        ]);
    }
}
