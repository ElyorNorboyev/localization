<?php

namespace Database\Seeders;
use App\Models\Students;
use App\Models\Product;
use App\Models\Services;
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
        Services::factory(10)->create();
    }
}
