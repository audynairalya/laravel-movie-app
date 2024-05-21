<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1.,
            'title' => 'Haikyu!!',
            'poster' => 'movie-07.jpeg',
            'name' => 'Adinda Alfianti',
            'rate' => '5 Star for HAIKYU!! its a dynamic anime series that follows Shoyo Hinatas journey in high school volleyball. With its thrilling sports action, compelling character development, and themes of teamwork and perseverance, its a must-watch for anime nd sports fans alike.',
            'date' => '09/04/23
            07:30 AM '
        ],
        [
            'id' => 2.,
            'title' => 'Detective Conan',
            'poster' => 'movie-08.jpeg',
            'name' => 'Dodod Nerra Alhea',
            'rate' => 'Best anime ever!! Highly recommend it 💕✨
            It is funny, full of mystery, while some episodes
            has action and adventure. A must-see series for
            any anime or mystery fan. And even the comedy
            makes it worth while for those of you that dont
            care much about both categories.',
            'date' => '02/07/24
            09:45 AM '
        ],
        [
            'id' => 3.,
            'title' => 'My hero Academia',
            'poster' => 'movie-09.jpeg',
            'name' => 'Nathania Wibowo',
            'rate' => '10 out of 10, This Movie delivers an electrifying
            extension of the beloved anime series. Set in a
            world where superpowers, or quirks, are the norm,
            the film follows young hero-in-training, Izuku
            Midoriya, and his classmates on a thrilling adventure. Packed with intense action sequences, heartfelt
            moments, and stunning animation, its a must-watch
            for fans of the series.',
            'date' => '17/06/21
            10:12 PM '
        ],
        [
            'id' => 4.,
            'title' => 'Dragon Ball Z',
            'poster' => 'movie-01.jpeg',
            'name' => 'Athallah Abyan',
            'rate' => 'Dragon Ball Z taught me important lessons, like working hard to achieve greatness. The characters didnt just drink some magic potion to aquire their super strength, they had to work for everything they had. I admired the tenacity and drive of Goku, Vegeta and their friends and I yearned to be like them.',
            'date' => '18/09/20
            04:11 PM '
        ],
        [
            'id' => 5.,
            'title' => 'Jujutsu Kaisen',
            'poster' => 'movie-06.jpeg',
            'name' => 'Muhammad Apis',
            'rate' => 'Okay.. so Jujutsu Kaisen is now one of my favorite series, its 100 out of 10 from me. Its basically like Naruto but they fight curses. All the fight scenes are mind blowing, have a ton of cool fighting styles and give chills down your spine. The jokes and animation are hilarious.',
            'date' => '13/01/24
            01:59 AM '
        ],
    ];

    public function getAllReviews() {
        return $this->reviews;
    }
}
