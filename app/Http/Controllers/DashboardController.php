<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Parrain;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Vous pouvez faire de même pour les autres entités (Agents)
        $nombreArtisans = Artisan::count();
        // Vous pouvez faire de même pour les autres entités (Parrains)
        $nombreParrains = Parrain::count();
        // Vous pouvez faire de même pour les autres entités (Parrains)

        return view('Dashboard', ['user' => $user, 'nombreArtisans' => $nombreArtisans, "nombreParrains" => $nombreParrains]);
    }
    public function showFiche()
    {
        $user = Auth::user();
        return view('Fiche', ['user' => $user]);
    }
    public function showListe()
    {
        $nbrArtisanTotal = Artisan::All()->count();
        $artisans = Artisan::paginate(12);
        $user = Auth::user();
        $count = 1;
        return view('Liste', ['user' => $user, 'artisans' => $artisans, "count" => $count, "nbrArtisanTotal" => $nbrArtisanTotal]);
    }

    public function showMessages()
    {
        $user = Auth::user();
        return view('Fiche', ['user' => $user]);
    }
    public function showCalendrier()
    {
        $user = Auth::user();
        return view('Calendrier', ['user' => $user]);
    }
}
