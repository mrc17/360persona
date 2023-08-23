<?php

namespace App\Models;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parrain extends Model
{
    use HasFactory;

    protected $fillable=[
        'Nom',"Prenom","sexe","Profession","Appreciation",
    ];

    public function artisan(){
        return $this->belongsTo(Artisan::class,'id_parrain');
    }
}
