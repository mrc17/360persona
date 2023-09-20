<?php

namespace App\Models;

use App\Models\Habitation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modèle représentant une organisation.
 *
 * @property int $id
 * @property string $etatOrganisation
 * @property string $NomOrganisation
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @property-read \App\Models\Habitation $habitation
 *
 * @package App\Models
 */
class Organisation extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'etat_organisation',
        'nom_organisation',
    ];

    /**
     * Obtenez l'habitation associée à cette organisation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function habitation()
    {
        return $this->belongsTo(Habitation::class, 'organisation_id');
    }
}
