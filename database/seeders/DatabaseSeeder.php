<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Muzakir Nur',
            'email' => 'muzakir.nurr@gmail.com',
            'password' => bcrypt('password'),
        ]);
        Category::factory(9)->create();
        Book::factory(1500)->create();
    }
}
