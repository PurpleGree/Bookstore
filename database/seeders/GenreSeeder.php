<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genres = [
            ['genreName' => 'Art Nouveau'],
            ['genreName' => 'Cubism'],
            ['genreName' => 'Fauvism'],
            ['genreName' => 'Impressionism'],
            ['genreName' => 'Post-Impressionism'],
            ['genreName' => 'Romanticism'],
        ];

        foreach ($genres as $genre) {
            Genre::factory()->create($genre);
        }


    }
}
