<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("continents")->insert([
                "nom"=>"France"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Belgique"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Allemagne"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Italie"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Espagne"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Portugal"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Angleterre"    
            ]);
    }
}
