<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom", 255);
            $table->string("prenom", 255);
            $table->unsignedInteger("age");
            $table->string("telephone");
            $table->string("pays");
            $table->foreignId("photo_id")->constrained("photos");
            $table->foreignId("genre_id")->constrained("genres");
            $table->foreignId("role_id")->constrained("roles");
            $table->foreignId("equipe_id")->constrained("equipes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('joueurs');
    }
}
