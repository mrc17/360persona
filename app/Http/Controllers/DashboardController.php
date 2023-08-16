<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        // Utiliser les informations de l'utilisateur pour le traitement
        // Par exemple, $user->name pour obtenir le nom de l'utilisateur

        return view('dashboard', ['user' => $user]);
    }
}
