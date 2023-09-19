<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = [
        'activite1',
        'denomination',
        'localisation1',
        'num_rccm',
        'activite2',
        'numero_de_la_dfe',
        'localisation2',
        'num_cnps',
        'projet',
        'cout_estimatif_en_lettre',
        'cout_estimatif_en_chiffre',
    ];

    public function habitation()
    {
        return $this->belongsTo(Habitation::class, 'id_habitation');
    }
}
