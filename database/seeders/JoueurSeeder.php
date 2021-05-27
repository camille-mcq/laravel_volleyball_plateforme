<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("joueurs")->insert([
            "nom"=>"Merkel",
            "prenom"=> "Angela",
            "age"=>34,
            "telephone"=>"0456769504",
            "mail"=>"halo@germany.de",
            "pays"=>"allemagne",
            "genre_id"=>1,
            "role_id"=>2,
            "equipe_id"=>1
            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Macron",
            "prenom"=> "Manu",
            "age"=>34,
            "telephone"=>"0689553423",
            "mail"=>"bonjour@france.fr",
            "pays"=>"france",
            "genre_id"=>2,
            "role_id"=>4,
            "equipe_id"=>2,            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Philippe",
            "prenom"=> "Roi",
            "age"=>34,
            "telephone"=>"0475235465",
            "mail"=>"salut@belgique.be",
            "pays"=>"belgique",
            "genre_id"=>2,
            "role_id"=>1,
            "equipe_id"=>3,
            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Obama",
            "prenom"=> "Barak",
            "age"=>23,
            "telephone"=>"045634512",
            "mail"=>"hey@usa.usa",
            "pays"=>"USA",
            "genre_id"=>2,
            "role_id"=>1,
            "equipe_id"=>1
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Fz",
            "prenom"=> "Elias",
            "age"=>27,
            "telephone"=>"0456234597",
            "mail"=>"zerma@yoyo.mlgk",
            "pays"=>"belgique",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Lala",
            "prenom"=> "Laurie",
            "age"=>23,
            "telephone"=>"0456234459",
            "mail"=>"lalalaurie@yoyo.mlgk",
            "pays"=>"belgique",
            "genre_id"=>1,
            "role_id"=>1,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"CamCam",
            "prenom"=> "Camille",
            "age"=>24,
            "telephone"=>"0456234450",
            "mail"=>"camcamcamille@yoyo.mlgk",
            "pays"=>"belgique",
            "genre_id"=>1,
            "role_id"=>1,
            "equipe_id"=>3,
        ]);
    }
}
