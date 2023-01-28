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
        //\App\Models\User::factory(2)->create();
        \App\Models\Admin::factory(3)->create();

        // \App\Models\User::factory()->create([
     //     'name' => 'Test User',
     //     'email' => 'test@example.com',
        // ]);

        // Store::factory(5)->create();
        // Category::factory(10)->create();
        // Product::factory(100)->create();

        // $this->call(UserSeeder::class);
    }
}
