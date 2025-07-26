<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;
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
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Factory::create();
        foreach (range(1, 100) as $index) {
            User::create([
                'name' => $faker->name,
                'position' => $faker->jobTitle,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
