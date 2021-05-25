<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $table = "joueurs";

    protected $fillable = ["nom", "prenom", "age", "telephone", "email", "genre", "pays", "role_id", "equipe_id", "photo_id",
 ];

    //un nom , prénom,age, téléphone,email, un genre, un pays d'origine, rôle_id dans une partie ( avant, central, arrière, remplaçant ), une equipe_id et une photo_id
}
