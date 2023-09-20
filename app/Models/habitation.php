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
        'ville',
        'commune',
        'quartier',
        'situation_matrimoliale', // Assurez-vous que ce nom correspond à la colonne dans votre base de données.
        'regime_matrimoliale', // Assurez-vous que ce nom correspond à la colonne dans votre base de données.
        'id_assurance',
        'id_finance',
        'organisation_id',
        'charge_id',
    ];

    public function artisans()
    {
        return $this->hasMany(Artisan::class, 'id_habitation');
    }

    public function assurance()
    {
        return $this->belongsTo(Assurance::class, 'id_assurance');
    }

    public function finances()
    {
        return $this->belongsTo(Finances::class, 'id_finance');
    }

    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

    public function charge()
    {
        return $this->belongsTo(Charge::class, 'charge_id');
    }

    public function activite()
    {
        return $this->belongsTo(Activite::class, 'charge_id');
    }
}
