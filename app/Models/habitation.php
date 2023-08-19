<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'Ville',
        'Commune',
        'Quartier',
        'SituationMatrimoliale',
        'RégimeMatrimoliale',
        'id_Assurance',
        'id_finance',
        'organisation_id',
        'charge_id',
    ];
}
