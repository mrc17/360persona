<?php

namespace App\Models;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fiche extends Model
{
    use HasFactory;

    protected $fillable = [
        "date",
        "numfiche",
        "code",
        "zone",
        "ordre"
    ];

    public function artisan(){
        return $this->belongsTo(Artisan::class,'id_fiche');
    }
}
