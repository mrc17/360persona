<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_assurance',
        'numero_assurance',
        'agence_assurance',
    ];

    public function habitation()
    {
        return $this->belongsTo(Habitation::class, 'id_assurance');
    }
}
