<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $numReviews = random_int(5, 30);
        Book::factory(100)->create();

        Review::factory(33)
            ->good()
            ->create();

        Review::factory(33)
            ->average()
            ->create();

        Review::factory(34)
            ->bad()
            ->create();

        // Book::factory(33)->create()->each(function ($book) {
        //     $numReviews = random_int(5, 30);
        //     Review::factory()->count($numReviews)
        //         ->good()
        //         ->for($book)
        //         ->create();
        // });

        // Book::factory(33)->create()->each(function ($book) {
        //     $numReviews = random_int(5, 30);
        //     Review::factory()->count($numReviews)
        //          ->average()
        //         ->for($book)
        //         ->create();
        // });

        // Book::factory(34)->create()->each(function ($book) {
        //     $numReviews = random_int(5, 30);
        //     Review::factory()->count($numReviews)
        //          ->bad()
        //         ->for($book)
        //         ->create();
        // });
    }
}
