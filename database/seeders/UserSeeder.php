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

            $users = [
                [
                    
                    'name'      => 'Alexis',
                    'email'    => 'Panda.tattoo@outlook.fr',
                   
                    'password'  => '0000',
                    
                   
                    'prenom' => 'Alexis',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0627409658',
                ],
                [
                    
                    'name'      => 'Sarah',
                    'email'    => 'SarahPandragon@gmail.com',
                    
                    'password'  => '0000',
                    
                    
                    'prenom' => 'Sarah',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '06066006060',
                ],
                [
                   
                    'name'      => 'Isabelle',
                    'email'    => 'isabelle@gmail.com',
                    
                    'password'  => '0000',
                   
                    
                    'prenom' => 'Isabelle',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0606060660',
                ],
                [
                    
                    'name'      => 'Anatomix',
                    'email'    => 'Anatomix@gmail.com',
                    
                    'password'  => '0000',
                    
                    'prenom' => 'Anatomix',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0627409658',
                ],
                [
                    
                    'name'      => 'Samantha',
                    'email'    => 'Alma@gmail.com',
                    
                    'password'  => '0000',
                    
                    'prenom' => 'Samantha',
                    'adresse' => 'Isle sur la sorgue',
                    'code_postal' => '84800',
                    'ville' => 'Isle sur la sorgue',
                    'telephone' => '0606060606',
                ],
            ];

            foreach ($users as $user) {
                User::create($user);
            }



        }
}
