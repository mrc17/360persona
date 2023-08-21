<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('Dashboard', ['user' => $user]);
    }
    public function showFiche()
    {
        $user = Auth::user();
        return view('Fiche', ['user' => $user]);
    }
    public function showListe()
    {
        $nbrArtisanTotal =Artisan::All()->count();
        $artisans = Artisan::paginate(12);
        $user = Auth::user();
        $count=1;
        return view('Liste', ['user' => $user, 'artisans' => $artisans,"count"=>$count,"nbrArtisanTotal"=>$nbrArtisanTotal]);
    }

    public function showMessages()
    {
        $user = Auth::user();
        return view('Fiche', ['user' => $user]);
    }
}
