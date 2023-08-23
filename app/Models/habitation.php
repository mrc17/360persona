<?php
namespace App\Models;

use App\Models\Charge;
use App\Models\Artisan;
use App\Models\Finances;
use App\Models\Assurance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function artisans(){
        return $this->hasMany(Artisan::class, 'id_habitation');
    }

    public function assurances(){
        return $this->belongsTo(Assurance::class, 'id_Assurance');
    }

    public function finances(){
        return $this->belongsTo(Finances::class,'id_finance');
    }
    public function organisation(){
        return $this->belongsTo(Finances::class,'organisation_id');
    }
    public function charge(){
        return $this->belongsTo(Charge::class,'charge_id');
    }

    public function activite(){
        return $this->belongsTo(Activite::class,'charge_id');
    }

}
