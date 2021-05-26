<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("equipes")->insert([
            "nom"=>"United",
            "ville"=> "New-York",
            "pays"=>"USA",
            "max"=>12,
            "role_id"=>1,
            "continent_id"=>2,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Lions",
            "ville"=> "Paris",
            "pays"=>"france",
            "max"=>23,
            "role_id"=>3,
            "continent_id"=>2,
        ]);
        
        DB::table("equipes")->insert([
            "nom"=>"Griffondor",
            "ville"=> "Berlin",
            "pays"=>"allemagne",
            "max"=>34,
            "role_id"=>2,
            "continent_id"=>3,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Serpentar",
            "ville"=> "Madrid",
            "pays"=>"Espagne",
            "max"=>13,
            "role_id"=>3,
            "continent_id"=>4,
        ]);
        
        
    }
}
