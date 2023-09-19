<?php

namespace App\Models;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Modèle représentant un parrain.
 *
 * @property int $id
 * @property string $nom_parrain
 * @property string $prenom_parrain
 * @property string $sexe_parrain
 * @property string $profession_parrain
 * @property string $appreciation_parrain
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @property-read \App\Models\Artisan $artisan
 *
 * @package App\Models
 */
class Parrain extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_parrain',
        'prenom_parrain',
        'sexe_parrain',
        'profession_parrain',
        'appreciation_parrain',
    ];

    /**
     * Obtenez l'artisan associé à ce parrain.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artisan()
    {
        return $this->belongsTo(Artisan::class, 'id_parrain');
    }
}
