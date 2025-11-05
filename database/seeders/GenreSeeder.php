<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['name'=>'Rock'],
            ['name'=>'Bossa Nova'],
            ['name'=>'Adoración'],
            ['name'=>'Disco'],
            ['name'=>'Balada'],
            ['name'=>'Electrónica'],
            ['name'=>'Reggaeton'],
            ['name'=>'Jazz'],
            ['name'=>'Salsa'],
            ['name'=>'Merengue'],
            ['name'=>'Ballenato'],
            ['name'=>'Bolero'],
            ['name'=>'Blues'],
            ['name'=>'Metal'],
        ];
        
        Genre::insert($genres);
    }
}