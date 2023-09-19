<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charge extends Model
{
    use HasFactory;

    protected $fillable = [
        'nbr_enfant',
        'nbr_fille',
        'nbr_garcon',
        'scolarise',
    ];

    public function habitation()
    {
        return $this->belongsTo(Habitation::class, "charge_id");
    }
}
