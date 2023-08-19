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
        $artisans = Artisan::paginate(12);
        $user = Auth::user();

        return view('Liste', ['user' => $user, 'artisans' => $artisans]);
    }

    public function showMessages()
    {
        $user = Auth::user();
        return view('Fiche', ['user' => $user]);
    }
}
