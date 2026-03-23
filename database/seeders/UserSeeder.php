<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
     public function run(): void
        {
            //Artiste::factory()->count(6)->create();

            $artists = [
                [
                    'id'       => '',
                    'name'      => 'Alexis',
                    'email'    => 'Panda.tattoo@outlook.fr',
                    'email_verified_at'  => '',
                    'password'  => '0000',
                    'remember_token' => '',
                    'timestamps' => '',
                    'prenom' => 'Alexis',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0627409658',
                ],
                [
                    'id'       => '',
                    'name'      => 'Sarah',
                    'email'    => 'SarahPandragon@gmail.com',
                    'email_verified_at'  => '',
                    'password'  => '0000',
                    'remember_token' => '',
                    'timestamps' => '',
                    'prenom' => 'Sarah',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '06066006060',
                ],
                [
                    'id'       => '',
                    'name'      => 'Isabelle',
                    'email'    => 'isabelle@gmail.com',
                    'email_verified_at'  => '',
                    'password'  => '0000',
                    'remember_token' => '',
                    'timestamps' => '',
                    'prenom' => 'Isabelle',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0606060660',
                ],
                [
                    'id'       => '',
                    'name'      => 'Anatomix',
                    'email'    => 'Anatomix@gmail.com',
                    'email_verified_at'  => '',
                    'password'  => '0000',
                    'remember_token' => '',
                    'timestamps' => '',
                    'prenom' => 'Anatomix',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0627409658',
                ],
                [
                    'id'       => '',
                    'name'      => 'Samantha',
                    'email'    => 'Alma@gmail.com',
                    'email_verified_at'  => '',
                    'password'  => '0000',
                    'remember_token' => '',
                    'timestamps' => '',
                    'prenom' => 'Samantha',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0606060606',
                ],
            ];

            foreach ($artists as $artist) {
                Artist::create($artist);
            }



        }
}
