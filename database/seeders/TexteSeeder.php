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
                    'contenu'    => 'Lundi : Fermé<br />Mardi : 10h00 - 19h00<br />Mercredi : 10h00 - 19h00<br />Jeudi : 10h00 - 19h00<br />Vendredi : 10h00 - 19h00<br />Samedi : 10h00 - 19h00<br />Dimanche : Fermé'
                ],
                [
                    'titre'      => 'Adresse',
                    'slug'       => 'adresse',
                    'contenu'    => '100 avenue de la petite marine 84800,<br />Isle sur la Sorgue'
                ],
                [
                    'titre'      => 'Équipe Professionnelle',
                    'slug'       => 'equipe-professionnelle',
                    'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'
                ],
                [
                    'titre'      => 'Biographie Studio',
                    'slug'       => 'biographie-studio',
                    'contenu'    => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras semper auctor neque vitae tempus quam pellentesque, ipsum consectetur elit sit amet, leo. Tortor id aliquet lectus proin ut faucibus. Velit sed ullamcorper morbi tincidunt. Eu facilisis sed odio morbi quis commodo odio aenean sed. Facilisis sed odio morbi quis commodo odio aenean sed. Adipiscing elit ut tellus elementum sagittis vitae et leo. Tempor id aliquet lectus proin ut faucibus. Velit sed ullamcorper morbi tincidunt. Eu facilisis sed odio morbi quis commodo odio aenean sed.Martinez'
                ]
            ];

            foreach ($textes as $texte) {
                Texte::create($texte);
            }
        }
}
