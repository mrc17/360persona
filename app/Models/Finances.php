<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finances extends Model
{
    use HasFactory;
    protected $fillable=[
        'etat','Nom',
    ];

    public function habitation(){
        return $this->belongsTo(Habitation::class,'id_finance');
    }
}
