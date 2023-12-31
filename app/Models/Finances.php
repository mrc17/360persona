<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finances extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_finance', 'etat_finance',
    ];

    public function habitation()
    {
        return $this->hasOne(Habitation::class, 'id_finance');
    }
}
