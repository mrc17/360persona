<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    protected $fillable = [
        "Nom",
        "Prenom",
        "Dtnaissance",
        "LieuNaissance",
        "Profession",
        "AnExpProf",
        "Sexe",
        "AnProf",
        "registreMetier",
        "Email",
        "Contact",
        "id_parrain",
        "id_habitation",
        "id_agent",
        "id_fiche",
        'id_agent',
        'id_activite'
    ];
}
