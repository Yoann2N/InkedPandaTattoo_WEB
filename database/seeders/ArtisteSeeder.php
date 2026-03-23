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
                    'artiste'       => 'Alexis Panda',
                    'profession'      => 'Tatoueur',
                    'style'    => 'Réaliste',
                    'pseudo'        => 'Alexis Panda',
                    'bio'  => 'blablabla',
                    'instagram' => 'https://www.instagram.com/alexis.panda.tattooartist/',
                    'facebook' => 'https://www.facebook.com/84.TOTI',
                    'banniereUrl' => 'bannieres/banniere_studio.jpg',
                    'vignetteUrl' => 'vignettes/logo_tatoo1.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => User::inRandomOrder()->value('id'),
                ],
                [
                    'artiste'       => 'Sarah Pandragon',
                    'profession'      => 'Tatoueuse',
                    'style'    => 'Ligne fine',
                    'pseudo'        => 'Sarah Pandragon',
                    'bio'  => 'blablabla',
                    'instagram' => 'https://www.instagram.com/sarahpendragon/',
                    'facebook' => 'Sarah Pandragon',
                    'banniereUrl' => 'bannieres/banniere_studio.jpg',
                    'vignetteUrl' => 'vignettes/logo_tatoo2.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }teal',
                    'user_id' => User::inRandomOrder()->value('id'),
                ],
                [
                    'artiste'       => 'Isabelle',
                    'profession'      => 'Maquillage permanent',
                    'style'    => 'Maquillage permanent',
                    'pseudo'        => 'Isabelle',
                    'bio'  => 'blablabla',
                    'instagram' => 'Isabelle',
                    'facebook' => 'Isabelle',
                    'banniereUrl' => 'bannieres/banniere_studio.jpg',
                    'vignetteUrl' => 'vignettes/logo_tatoo3.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => User::inRandomOrder()->value('id'),
                ],
                [
                    'artiste'       => 'Anatomix',
                    'profession'      => 'Perceur',
                    'style'    => '',
                    'pseudo'        => 'Anatomix',
                    'bio'  => 'blablabla',
                    'instagram' => 'https://www.instagram.com/anatomix84?igsh=ejdjdDlyc3FxZDFs&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnpe-k51gRMjkwKjBfA2WDJfht_gDlJ_eHXCJGoyPvQURDAX_HiiCLV3ud7u8_aem_REPZ-0sNj1B0XlvMLYvqRg',
                    'facebook' => '',
                    'banniereUrl' => 'bannieres/banniere_studio.jpg',
                    'vignetteUrl' => 'vignettes/logo_tatoo4.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => User::inRandomOrder()->value('id'),
                ],
                [
                    'artiste'       => 'Alma',
                    'profession'      => 'Nailartiste',
                    'style'    => '',
                    'pseudo'        => 'Alma',
                    'bio'  => 'blablabla',
                    'instagram' => 'https://www.instagram.com/_alma_belleza_?igsh=MXZ6anJ6bHhsa29xcA%3D%3D&fbclid=PAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQMMjU2MjgxMDQwNTU4AAGnropG6IbFmiW5MVwueYSXCDNb8p85RwRV8rt5L1pDrbFgGf9-vuCRLgrZT9s_aem_TtZ3Tl9DUFJGJqTgpaKwxQ',
                    'facebook' => '',
                    'banniereUrl' => 'bannieres/banniere_studio.jpg',
                    'vignetteUrl' => 'vignettes/logo_tatoo5.jpg',
                    'rss' => 'https://rss.app/embed/v1/imageboard/WvQISdq1zYHX8GlM',
                    'css' => 'body { background-color: #f0f0f0; }aqua',
                    'user_id' => User::inRandomOrder()->value('id'),
                ],
            ];

            foreach ($artists as $artist) {
                Artist::create($artist);
            }



        }
}