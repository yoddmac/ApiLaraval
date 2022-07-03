<?php

namespace Database\Seeders;
use App\Models\users;

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
        users::factory()->count(10)->create();

        // \App\Models\User::factory(10)->create();
    }
}
