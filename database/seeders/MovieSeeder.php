<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Drama

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Guardian: The Lonely and Great God',
            'photo' => 'goblin.jpg',
            'description' => "In his quest for a bride to break his immortal curse, a 939-year-old guardian of souls meets a grim reaper and a sprightly student with a tragic past.",
            'rating' => '4.96'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Start-Up',
            'photo' => 'start-up.jpg',
            'description' => "Young entrepreneurs aspiring to launch virtual dreams into reality compete for success and love in the cutthroat world of Korea's high-tech industry.",
            'rating' => '4.89'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Hometown Cha-Cha-Cha',
            'photo' => 'homcha.jpg',
            'description' => "A big-city dentist opens up a practice in a close-knit seaside village, home to a charming jack-of-all-trades who is her polar opposite in every way.",
            'rating' => '4.89'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Strong Woman Do-Bong-soon',
            'photo' => 'bongsoon.jpg',
            'description' => "Born with supernatural strength, Bong-soon fights evil and procures justice while getting tangled in a love triangle with her CEO boss and cop crush.",
            'rating' => '4.81'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'My Love from the Star',
            'photo' => 'dominjoon.jpg',
            'description' => "An alien who came to Earth 400 years ago is almost able to return to his own planet, but when he meets a famous actress, he doesn't want to go home.",
            'rating' => '4.73'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'My Liberation Notes',
            'photo' => 'libnotes.jpeg',
            'description' => "Three siblings, exhausted by the monotony of day-to-day adulthood, seek to find fulfillment and freedom from their unremarkable lives.",
            'rating' => '4.59'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Our Blues',
            'photo' => 'ourblues.png',
            'description' => "Romance is sweet and bitter — and life riddled with ups and downs — in multiple stories about people who live and work on bustling Jeju Island.",
            'rating' => '4.63'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 1,
            'title' => 'Dr. Romantic',
            'photo' => 'kimsabu.jpg',
            'description' => "An eccentric, triple board-certified virtuoso surgeon leaves a top job in Seoul and ends up at a provincial hospital, where he mentors young doctors.",
            'rating' => '4.35'
        ]);


        // Kids

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'BoBoiBoy',
            'photo' => 'boboiboy.jpg',
            'description' => 'Together with his friends, a boy with elemental superpowers fights off cocoa-obsessed aliens who want to conquer the planet.',
            'rating' => '4.53'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Pororo - The Little Penguin',
            'photo' => 'pororo.jpg',
            'description' => 'On a tiny island, Pororo the penguin has fun adventures with his friends Eddy the fox, Loopy the beaver, Poby the polar bear and Crong the dinosaur.',
            'rating' => '4.8'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Cocomong',
            'photo' => 'cocomong.jpg',
            'description' => "What's in your fridge? In sunny Refrigerator Land, everyday ingredients transform into animal friends who love a good adventure.",
            'rating' => '4.1'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 2,
            'title' => 'Tayo and Little Wizards',
            'photo' => 'tayo.jpg',
            'description' => "WhaTayo speeds into an adventure when his friends get kidnapped by evil magicians invading their city in search of a magical gemstone.",
            'rating' => '4.77'
        ]);


        // TV Show

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Running Man',
            'photo' => 'runningman.jpg',
            'description' => "Running Man is a South Korean variety show, formerly part of SBS' Good Sunday lineup. It was first aired on July 11, 2010",
            'rating' => '4.65'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'Shark Tank',
            'photo' => 'sharktank.jpg',
            'description' => "Shark Tank is an American business reality television series that premiered on August 9, 2009, on ABC. It shows entrepreneurs making business presentations to a panel of five investors or 'sharks,' who decide whether to invest in their company.",
            'rating' => '4.22'
        ]);

        DB::table('movies')->insert([
            'genre_id' => 3,
            'title' => 'MasterChef US',
            'photo' => 'masterchef.jpg',
            'description' => "MasterChef is an American competitive cooking reality TV show based on the British series of the same name, open to amateur and home chefs",
            'rating' => '4.61'
        ]);
    }
}
