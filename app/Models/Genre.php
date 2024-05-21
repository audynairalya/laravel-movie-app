<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1.,
            'title' => 'Naruto Shippuden',
            'poster' => 'movie-04.jpeg',
            'genre' => 'Adventure and Action',
            'description' => 'Action adventure fantasy blends thrilling action with fantastical elements, featuring daring heroes in epic quests against dark forces in imaginative worlds.'
        ],
        [
            'id' => 2.,
            'title' => 'Tokyo Ghoul',
            'poster' => 'movie-05.jpeg',
            'genre' => 'Dark Fantasy',
            'description' => 'Dark fantasy genre combines fantastical elements with grim, often macabre themes, exploring the darker aspects of human nature and society within supernatural settings.'
        ],
        [
            'id' => 3.,
            'title' => 'Jujutsu Kaisen',
            'poster' => 'movie-06.jpeg',
            'genre' => 'Supernatural',
            'description' => 'The supernatural genre typically refers to a category of fiction that involves elements beyond the natural world, often featuring paranormal or magical phenomena.'
        ],
        [
            'id' => 4.,
            'title' => 'One Piece',
            'poster' => 'movie-02.jpeg',
            'genre' => 'Comedy',
            'description' => 'This movie often incorporates humor through character interactions, Luffys playful and carefree personality, and the absurd situations the crew finds themselves in, providing a balance to the more serious themes.'
        ],
        [
            'id' => 5.,
            'title' => 'Demon Slayer',
            'poster' => 'movie-03.jpeg',
            'genre' => 'Historical',
            'description' => 'This genre involves settings from past eras, often incorporating elements of real history. Demon Slayer is set during the Taisho period in Japan (1912-1926), and it incorporates cultural and historical aspects of that era. The period setting enriches the story, providing a backdrop of early 20th-century Japan with traditional clothing, architecture, and societal norms.'
        ],
    ];

    public function getAllGenres() {
        return $this->genres;
    }
}
