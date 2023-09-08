<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charge extends Model
{
    use HasFactory;

    protected $fillable = [
        'NbrEnfant',
        'Nbrfille',
        'NbrGarcon',
        'Scolarise',
    ];

    public function habitation()
    {
        return $this->belongsTo(Habitation::class, "charge_id");
    }
}
