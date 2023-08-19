<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
