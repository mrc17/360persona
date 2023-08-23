<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;
    protected $fillable = [
        "Nom",
        "Contact",
        "Zone",
    ];

    public function habitation(){
        return $this->belongsTo(Artisan::class,'id_fiche');
    }
}
