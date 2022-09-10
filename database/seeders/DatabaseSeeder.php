<?php

namespace Database\Seeders;

use App\Models\tutoria;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $this->call([
            ProfesorSeeder::class,
            DiasHabilesSeeder::class
        ]);
        tutoria::factory(50)->create();

    }
}
