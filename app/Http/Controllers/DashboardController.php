<?php

namespace App\Http\Controllers;

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
        return view('Fiche',['user' => $user]);
    }
    public function showListe()
    {
        $user = Auth::user();
        return view('Liste',['user' => $user]);
    }
    public function showMessages()
    {
        $user = Auth::user();
        return view('Fiche',['user' => $user]);
    }
}
