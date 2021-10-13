<?php

namespace Database\Seeders;

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
        $this->call(meditationSeeder::class);
        $this->call(realmeditationSeeder::class);
        $this->call(articleSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
