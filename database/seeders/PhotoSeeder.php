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
            "nom"=>"angleterre.jpeg"    
        ]);
        DB::table("photos")->insert([
            "nom"=>"allemagne.jpeg"    
        ]);
        DB::table("photos")->insert([
            "nom"=>"belgique.jpeg"    
        ]);
        DB::table("photos")->insert([
            "nom"=>"espagne.jpeg"    
        ]);
        DB::table("photos")->insert([
            "nom"=>"france.jpeg"    
        ]);
        DB::table("photos")->insert([
            "nom"=>"italie.jpeg"    
        ]);
        DB::table("photos")->insert([
            "nom"=>"portugal.jpeg"    
        ]);
    }
}
