<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'id' => 1,
            'title' => 'Dragon Ball Z',
            'genre_id' => '1',
            'poster' => 'movie-01.jpeg',
            'synopsis' => 'Dragon Ball tells the story of a boy named Goku who lives in the middle of a mountain alone. He then meets Bulma, a genius young girl, who is trying to collect 7 magic balls which are said to be able to grant all wishes. These balls are called Dragon Ball.',
        ]);

        Movie::create([
            'id' => 2,
            'title' => 'One Piece',
            'genre_id' => '2',
            'poster' => 'movie-02.jpeg',
            'synopsis' => 'One Piece is a renowned Japanese manga series created by Eiichiro Oda. It follows the adventures of Monkey D. Luffy, a young and ambitious pirate whose ultimate goal is to find the legendary One Piece treasure.',
        ]);

        Movie::create([
            'id' => 3,
            'title' => 'Demon Slayer',
            'genre_id' => '3',
            'poster' => 'movie-03.jpeg',
            'synopsis' => 'Demon Slayer (Kimetsu no Yaiba) is a popular Japanese manga and anime series created by Koyoharu Gotouge. It tells the story of Tanjiro Kamado, a kind-hearted boy who becomes a demon slayer after his family is slaughtered by demons, and his younger sister, Nezuko, is turned into a demon.',
        ]);
        Movie::create([
            'id' => 4,
            'title' => 'Tokyo Ghoul',
            'genre_id' => '4',
            'poster' => 'movie-05.jpeg',
            'synopsis' => 'Tokyo Ghoul is set in an alternate reality where ghouls, creatures that look like normal people but can only survive by eating human flesh, live among the human population in secrecy, hiding their true nature in order to evade pursuit from the authorities.',
        ]);
        Movie::create([
            'id' => 5,
            'title' => 'Jujutsu Kaisen',
            'genre_id' => '5',
            'poster' => 'movie-06.jpeg',
            'synopsis' => 'Jujutsu Kaisen is the story of Yuji Itadori, an easygoing high school student who joins the occult club at school. When they accidentally summon grotesque creatures by messing with a cursed object, Itadori fights to save his friends lives.',
        ]);
    }
}
