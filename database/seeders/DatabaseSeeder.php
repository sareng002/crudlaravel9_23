<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Sutiyoso',
            'email' => 'sutiyoso002@gmail.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'sareng',
            'email' => 'sareng@gmail.com',
        ]);
    }
}
