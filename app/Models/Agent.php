<?php

namespace App\Models;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom_agent",
        "contact_agent",
        "zone_agent",
        "user_id"
    ];

    public function artisan()
    {
        return $this->belongsTo(Artisan::class,"id_agent",);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
