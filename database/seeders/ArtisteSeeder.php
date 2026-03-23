<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artiste;

class ArtisteSeeder extends Seeder
{

    public function run(): void
        {
            //Artiste::factory()->count(6)->create();

            $artists = [
                [
                    'artiste'       => '',
                    'profession'      => '',
                    'style'    => '',
                    'bio'        => '',
                    'formed_at'  => '',
                ],
                [
                    'name'       => '',
                    'genre'      => '',
                    'country'    => '',
                    'bio'        => '',
                    'formed_at'  => '',
                ],
                [
                    'name'       => '',
                    'genre'      => '',
                    'country'    => '',
                    'bio'        => '',
                    'formed_at'  => '',
                ],
                [
                    'name'       => '',
                    'genre'      => '',
                    'country'    => '',
                    'bio'        => '',
                    'formed_at'  => '',
                ],
                [
                    'name'       => '',
                    'genre'      => '',
                    'country'    => '',
                    'bio'        => '',
                    'formed_at'  => '',
                ],
            ];

            foreach ($artists as $artist) {
                Artist::create($artist);
            }



        }
}