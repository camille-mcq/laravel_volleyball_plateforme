<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("photos")->insert([
            "nom"=>"angleterre.jpeg",
            "joueur_id"=>2,    
        ]);
        DB::table("photos")->insert([
            "nom"=>"allemagne.jpeg",
            "joueur_id"=>1,    
        ]);
        DB::table("photos")->insert([
            "nom"=>"belgique.jpeg",
            "joueur_id"=>3,    
        ]);
        DB::table("photos")->insert([
            "nom"=>"espagne.jpeg",
            "joueur_id"=>4,    
        ]);
        DB::table("photos")->insert([
            "nom"=>"france.jpeg",
            "joueur_id"=>2,    
        ]);
        DB::table("photos")->insert([
            "nom"=>"italie.jpeg" ,
            "joueur_id" => 1   
        ]);
        DB::table("photos")->insert([
            "nom"=>"portugal.jpeg",   
            "joueur_id"=>4, 
        ]);
    }
}
