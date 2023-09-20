<?php

namespace App\Models;

use App\Models\Agent;
use App\Models\Fiche;
use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artisan extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "dtnaissance",
        "lieu_naissance",
        "profession",
        "an_exp_prof",
        "sexe",
        "an_prof",
        "registre_metier",
        "email",
        "contact",
        "id_parrain",
        "id_habitation",
        "id_agent",
        "id_fiche",
        'id_activite'
    ];



    public function habitation()
    {
        return $this->belongsTo(Habitation::class, 'id_habitation');
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'id_agent');
    }

    public function parrain()
    {
        return $this->belongsTo(Parrain::class, 'id_parrain');
    }
    public function fiche()
    {
        return $this->belongsTo(Fiche::class, 'id_fiche');
    }
}
