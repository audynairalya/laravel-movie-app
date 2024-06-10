<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Adinda Alfianti',
            'rating' => '5/10',
            'date' => '09-04-23',
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => 'Dodod Nerralya',
            'rating' => '8/10',
            'date' => '02-07-24',
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => 'Nathania Wibowo',
            'rating' => '10/10',
            'date' => '17-06-21',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => 'Athallah Abyan',
            'rating' => '8/10',
            'date' => '18-09-20',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => 'Muhammad Apis',
            'rating' => ' 7/10',
            'date' => '13-01-24',
        ]);
    }
}
//
