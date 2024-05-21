<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1., 
            'title' => 'Dragon Ball Z',
            'poster' => 'movie-01.jpeg',
            'genre' => 'Adventure Fantasy',
            'synopsis' => 'Dragon Ball tells the story of a boy named Goku who lives in the middle of a mountain alone. He then meets Bulma, a genius young girl, who is trying to collect 7 magic balls which are said to be able to grant all wishes. These balls are called Dragon Ball.'
        ],
        [
            'id' => 2., 
            'title' => 'One Piece',
            'poster' => 'movie-02.jpeg',
            'genre' => 'Shounen',
            'synopsis' => 'One Piece is a renowned Japanese manga series created by Eiichiro Oda. It follows the adventures of Monkey D. Luffy, a young and ambitious pirate whose ultimate goal is to find the legendary One Piece treasure.'
        ],
        [
            'id' => 3., 
            'title' => 'Demon Slayer',
            'poster' => 'movie-03.jpeg',
            'genre' => 'Action / Historical / Horror',
            'synopsis' => 'Demon Slayer (Kimetsu no Yaiba) is a popular Japanese manga and anime series created by Koyoharu Gotouge. It tells the story of Tanjiro Kamado, a kind-hearted boy who becomes a demon slayer after his family is slaughtered by demons, and his younger sister, Nezuko, is turned into a demon.'
        ],
    ];

    public function getAllMovies() {
        return $this->movies;
    }
}