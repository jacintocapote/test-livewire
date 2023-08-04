<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Car;
use App\Models\Location;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory()
            ->count(20)
            ->create();
        Car::factory()
            ->count(20)
            ->create();
        Location::factory()
            ->count(2)
            ->create();
        Post::factory()
            ->count(50)
            ->create();
        

    }
}
