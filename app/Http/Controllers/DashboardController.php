<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Parrain;
use App\Models\Activite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Statistiques générales
        $nombreArtisans = Artisan::count();
        $nombreParrains = Parrain::count();
        $nombreActivites = Activite::count();

        // Les 4 artisans ayant la plus grande charge
        $artisansCharge = DB::table('artisans')
            ->join('charges', 'artisans.id_parrain', '=', 'charges.id')
            ->orderByDesc('charges.NbrEnfant')
            ->limit(4)
            ->get();

        // Le projet le plus coûteux
        $projetLePlusCouteux = Activite::orderByDesc('CoutestimatifEnchiffre')->first();

        // Répartition des artisans par âge et sexe
        $artisans = Artisan::all();
        $hommesJeunes = 0;
        $hommesMatures = 0;
        $femmesJeunes = 0;
        $femmesMatures = 0;
        $ageSeuil = 30;

        foreach ($artisans as $artisan) {
            $age = date('Y') - date('Y', strtotime($artisan->Dtnaissance));
            if ($artisan->Sexe === 'Homme') {
                if ($age < $ageSeuil) {
                    $hommesJeunes++;
                } else {
                    $hommesMatures++;
                }
            } elseif ($artisan->Sexe === 'Femme') {
                if ($age < $ageSeuil) {
                    $femmesJeunes++;
                } else {
                    $femmesMatures++;
                }
            }
        }
        $nombreFemmesMaturesMoins30 = Artisan::where('Sexe', 'Femme')
        ->whereRaw('YEAR(CURDATE()) - YEAR(Dtnaissance) >= 30')
        ->count();

        $nombreHommesMaturesMoins30 = Artisan::where('Sexe', 'Homme')
        ->whereRaw('YEAR(CURDATE()) - YEAR(Dtnaissance) >= 30')
        ->count();


        return view('Dashboard', [
            'user' => $user,
            'nombreArtisans' => $nombreArtisans,
            'nombreParrains' => $nombreParrains,
            'nombreActivites' => $nombreActivites,
            'artisansCharge' => $artisansCharge,
            'hommesMatures' => $hommesMatures,
            'femmesJeunes' => $femmesJeunes,
            'femmesMatures' => $femmesMatures,
            'nombreFemmesMaturesMoins30'=>$nombreFemmesMaturesMoins30,
            'nombreHommesMaturesMoins30'=>$nombreHommesMaturesMoins30
        ]);
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
