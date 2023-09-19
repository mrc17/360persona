<?php

namespace App\Models;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fiche extends Model
{
    use HasFactory;

    protected $fillable = [
        "date_fiche",
        "num_fiche",
        "code_fiche",
        "zone_fiche",
        "ordre_fiche",
    ];

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
