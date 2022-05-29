<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("en_US");

        $movies = DB::table('movies')->get();

        // Drama: 8 - 16 ep
        // Kids: 10 - 22 ep
        // TV Show: 5 - 30 ep

        foreach ($movies as $movie) {
            $movie_id = $movie->id;
            $genre_id = $movie->genre_id;

            $episodeCount = 12;
            if ($genre_id === 1) $episodeCount = rand(8, 16);
            else if ($genre_id === 2) $episodeCount = rand(10, 22);
            else if ($genre_id === 3) $episodeCount = rand(5, 30);

            for ($i = 1; $i <= $episodeCount; $i++) {
                DB::table('episodes')->insert([
                    'movie_id' => $movie_id,
                    'episode' => $i,
                    'title' => $faker->text($maxNbChars = 35)
                ]);
            }
        }

        /*
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 1,
            'title' => 'The Beginning',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 2,
            'title' => 'Adu Du Attacks!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 3,
            'title' => 'Multi-Monster Mayhem!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 4,
            'title' => 'Kidnapped!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 5,
            'title' => 'With Great Power Comes... A Catch?!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 6,
            'title' => 'A New Form Awakens!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 7,
            'title' => 'Game On!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 8,
            'title' => 'Justice Does Not Sleep!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 9,
            'title' => 'Checkers!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 10,
            'title' => 'Fan Mail!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 11,
            'title' => 'Cookie Casualty!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 12,
            'title' => 'Getting a Little Windy in Here!',
        ]);
        DB::table('episodes')->insert([
            'movie_id' => 1, //entah boboiboy
            'episode' => 13,
            'title' => 'Finale - Shake It Up',
        ]);
        */
    }
}
