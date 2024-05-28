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
            'movie' => 'Haikyu!!',
            'user' => 'Adinda Alfianti',
            'rating' => '5 star for HAIKYU!! Its a dynamic anime series that follows Shoyo Hinatas journey in high school volleyball.',
            'date' => '09-04-23',
        ]);

        Review::create([
            'id' => 2,
            'movie' => 'Detective Conan',
            'user' => 'Dodod Nerralya',
            'rating' => '8/10, Best anime ever!! Highly recommend it 💕.',
            'date' => '02-07-24',
        ]);

        Review::create([
            'id' => 3,
            'movie' => 'My Hero Academia',
            'user' => 'Nathania Wibowo',
            'rating' => '10 out of 10, This Movie delivers an electrifying extension of the beloved anime series.',
            'date' => '17-06-21',
        ]);

        Review::create([
            'id' => 4,
            'movie' => 'Dragon Ball Z',
            'user' => 'Athallah Abyan',
            'rating' => 'A hundred for Dragon Ball Z Movie, Because the movie teach me important lessons, like working hard to achieve greatness.',
            'date' => '18-09-20',
        ]);

        Review::create([
            'id' => 5,
            'movie' => 'Jujutsu Kaisen',
            'user' => 'Muhammad Apis',
            'rating' => 'Okay.. so Jujutsu Kaisen is now one of my favorite series, 100 out of 10 from me.',
            'date' => '13-01-24',
        ]);
    }
}
//
