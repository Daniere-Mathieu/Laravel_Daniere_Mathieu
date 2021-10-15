<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('books')->insert([
          [   'title' => "The title",
              'author' => "Da auteur",
              'publication_year' => 2002,
              'genre' => "Autre",
              'synopsis' => "Tres belle région Sinnoh",
          ],
          ['title' => "3 serieux ? ça fais beaucoup :(",
          'author' => "Da auteur",
          'publication_year' => 2002,
          'genre' => "Autre",
          'synopsis' => "Tres belle région Sinnoh",],
          ['title' => "le livre d'anass",
          'author' => "Da auteur",
          'publication_year' => 2002,
          'genre' => "Autre",
          'synopsis' => "Tres belle région Sinnoh",],
      ]);
    }
}
