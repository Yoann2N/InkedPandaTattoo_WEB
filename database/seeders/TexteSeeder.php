<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Texte;

class TexteSeeder extends Seeder
{

    public function run(): void
        {

            $textes = [
                [
                    'titre'      => 'Horaires',
                    'slug'       => 'horaires',
                    'contenu'    => 'Lundi : Fermé<br /> - Mardi : 10h00 - 19h00 Mercredi : 10h00 - 19h00 - Jeudi : 10h00 - 19h00 Vendredi : 10h00 - 19h00 - Samedi : 10h00 - 19h00 Dimanche : Fermé'
                ],
                [
                    'titre'      => 'Adresse',
                    'slug'       => 'adresse',
                    'contenu'    => '100 avenue de la petite marine 84800,<br /> Isle sur la Sorgue'
                ],
                [
                    'titre'      => 'Équipe Professionnelle',
                    'slug'       => 'equipe-professionnelle',
                    'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'
                ]
            ];

            foreach ($textes as $texte) {
                Texte::create($texte);
            }
        }
}
