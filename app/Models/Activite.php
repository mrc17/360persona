<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'Activite1',
        'Denomination',
        'Localisation1',
        'numRccm',
        'Activite2',
        'numeroDeLaDfe',
        'Localisation2',
        'numcnps',
        'Projet',
        'CoutestimatifEnlettre',
        'CoutestimatifEnchiffre',
    ];

    public function habitation(){
        return $this->belongsTo(Habitation::class,'id_agent');
    }
}
