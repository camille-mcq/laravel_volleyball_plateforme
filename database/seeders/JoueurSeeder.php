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
            "nom"=>"II",
            "prenom"=> "Elizabeth",
            "age"=>34,
            "telephone"=>"0456769504",
            "pays"=>"angleterre",
            "genre_id"=>1,
            "role_id"=>2,
            "equipe_id"=>1
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Merkel",
            "prenom"=> "Angela",
            "age"=>34,
            "telephone"=>"0689553423",
            "pays"=>"allemagne",
            "genre_id"=>2,
            "role_id"=>4,
            "equipe_id"=>2,            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Philippe",
            "prenom"=> "Roi",
            "age"=>34,
            "telephone"=>"0475235465",
            "pays"=>"belgique",
            "genre_id"=>2,
            "role_id"=>1,
            "equipe_id"=>3,
            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Fz",
            "prenom"=> "Elias",
            "age"=>23,
            "telephone"=>"045634512",
            "pays"=>"espagne",
            "genre_id"=>1,
            "role_id"=>1,
            "equipe_id"=>1
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Macron",
            "prenom"=> "Emmanuel",
            "age"=>27,
            "telephone"=>"0456456597",
            "pays"=>"france",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Matarella",
            "prenom"=> "Sergio",
            "age"=>27,
            "telephone"=>"0456234597",
            "pays"=>"italie",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Rebelo De Sousa",
            "prenom"=> "Marcelo",
            "age"=>27,
            "telephone"=>"0456234597",
            "pays"=>"portugal",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Jong-un",
            "prenom"=> "Kim",
            "age"=>27,
            "telephone"=>"0456234597",
            "pays"=>"corée",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
    }
}
