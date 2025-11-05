<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tonality;
class TonalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tonalidades = [
        // Tonalidades mayores
        ['name' => 'C'],
        ['name' => 'C#'],
        ['name' => 'D'],
        ['name' => 'D#'],
        ['name' => 'E'],
        ['name' => 'F'],
        ['name' => 'F#'],
        ['name' => 'G'],
        ['name' => 'G#'],
        ['name' => 'A'],
        ['name' => 'A#'],
        ['name' => 'B'],
        // Tonalidades menores
        ['name' => 'Cm'],
        ['name' => 'C#m'],
        ['name' => 'Dm'],
        ['name' => 'D#m'],
        ['name' => 'Em'],
        ['name' => 'Fm'],
        ['name' => 'F#m'],
        ['name' => 'Gm'],
        ['name' => 'G#m'],
        ['name' => 'Am'],
        ['name' => 'A#m'],
        ['name' => 'Bm'],
    ];

    Tonality::insert($tonalidades);





    }
}