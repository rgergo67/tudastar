<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Pig;
use App\Models\User;
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
        User::factory()->has(Category::factory()->has(Pig::factory()->count(3))->count(3))->create();
    }
}
