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
                    'contenu'    => 'Le studio Inked Panda est bien plus qu’un simple salon : c’est un véritable cocon dédié à l’art et au bien-être. Pensé comme un lieu où chacun peut se sentir à l’aise, il réunit des talents complémentaires : tatoueurs passionnés, perceur expérimenté, praticienne head spa et prothésiste ongulaire, tous animés par la même envie de prendre soin de vous.

Dans une ambiance chaleureuse et accueillante, chaque détail est pensé pour vous offrir un moment de détente et de confiance. Ici, le professionnalisme est au cœur de chaque prestation, avec une attention particulière portée à l’écoute et à l’accompagnement personnalisé.

Que ce soit pour un tatouage, un piercing ou un moment de relaxation, l’équipe vous chouchoute et vous guide pour révéler votre personnalité à travers des prestations sur mesure. Inked Panda, c’est l’alliance parfaite entre créativité, expertise et bien-être.'
                ]
            ];

            foreach ($textes as $texte) {
                Texte::create($texte);
            }
        }
}
