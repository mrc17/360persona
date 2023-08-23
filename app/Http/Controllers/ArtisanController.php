<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Fiche;
use App\Models\Charge;
use App\Models\Artisan;
use App\Models\Parrain;
use App\Models\Activite;
use App\Models\Finances;
use App\Models\Assurance;
use App\Models\Habitation;
use App\Models\Organisation;
use App\Http\Requests\ArtisanRequest;
use App\Http\Requests\SearchArtisanRequest;

class ArtisanController extends Controller
{
    //Cretion de la function de
    public function create(ArtisanRequest $request)
    {

        $fiche = Fiche::create([
            "date" => $request->input('dateRecensement'),
            "numfiche" => $request->input('ficheRecensement'),
            "code" => $request->input('codeRecensement'),
            "zone" => $request->input('zoneRecensement'),
            "ordre" => $request->input('ordreRecensement'),
        ]);

        $fiche_id = $fiche->id;

        $finance = Finances::create([
            'etat' => $request->input('etatFinance'),
            'Nom' => $request->input('nomfinance'),

        ]);

        $finance_id = $finance->id;

        $Assurance = $request->input('Assurance');
        $autre = $request->input('autre');

        $Assurance = ($Assurance === "AUTREASSURANCE") ? $autre : $Assurance;


        $assurance = Assurance::create([
            'Nom' => $Assurance,
            'numero' => $request->input('numeroCnps'),
            'Agence' => $request->input('Agence'),
        ]);

        $assurance_id = $assurance->id;

        $organisation = Organisation::create([
            'etat' => $request->input('etatFinance'),
            "Nom" => $request->input('nomfinance')
        ]);

        $organisation_id = $organisation->id;

        $charge = Charge::create([
            'NbrEnfant' => $request->input('NbreEnfant'),
            'Nbrfille' => $request->input('NbreFille'),
            'NbrGarcon' => $request->input('NbreGarcon'),
            'Scolarise' => $request->input('Scolaire'),
        ]);

        $charge_id = $charge->id;

        $habitation = Habitation::create([
            'Ville' => $request->input('VilleArtisan'),
            'Commune' => $request->input('CommuneArtisan'),
            'Quartier' => $request->input('QuartierArtisan'),
            'SituationMatrimoliale' => $request->input('Situation'),
            'RégimeMatrimoliale' => $request->input('Regime'),
            'id_Assurance' => $assurance_id,
            'id_finance' => $finance_id,
            'organisation_id' => $organisation_id,
            'charge_id' => $charge_id,
        ]);

        $habitation_id = $habitation->id;

        $activite = Activite::create([
            'Activite1' => $request->input('Activite_1'),
            'Denomination' => $request->input('denomination'),
            'Localisation1' => $request->input('Localisation_1'),
            'numRccm' => $request->input('numero_rccm'),
            'Activite2' => $request->input('Activite_2'),
            'numeroDeLaDfe' => $request->input('numeroDeLaDfe'),
            'Localisation2' => $request->input('Localisation_2'),
            'numcnps' => $request->input('numeroCnpsActivite'),
            'Projet' => $request->input('Projet'),
            'CoutestimatifEnlettre' => $request->input('CoutEstimatifEnLettre'),
            'CoutestimatifEnchiffre' => $request->input('CoutEstimatifEnChiffre'),
        ]);

        $activite_id = $activite->id;

        $agent = Agent::create([
            "Nom" => $request->input('NomDeLagentRecenseur'),
            "Contact" => $request->input('contactRecenseur'),
            "Zone" => $request->input('ZoneRecenseur'),
        ]);

        $agent_id = $agent->id;


        $parrain = Parrain::create([
            'Nom' => $request->input('NomDuParrain'),
            "Prenom" => $request->input('PrenomDuParrain'),
            "sexe" => $request->input('sexeDuParrain'),
            "Profession" => $request->input('ProfessionDuParrain'),
            "Appreciation" => $request->input('Appreciation_du_bureau')
        ]);

        $parrain_id = $parrain->id;


        $artisan = Artisan::create([
            'Nom' => $request->input('NomArtisan'),
            'Prenom' => $request->input('PrenomArtisan'),
            'Dtnaissance' => $request->input('DateNaissanceArtisan'),
            'LieuNaissance' => $request->input('LieuNaissanceArtisan'),
            'Profession' => $request->input('ProfessionArtisan'),
            'AnExpProf' => $request->input('AnneeExperienceProfessionnelleArtisan'),
            'Sexe' => $request->input('sexeartisan'),
            'AnProf' => $request->input('AnneeProfession'),
            'registreMetier' => $request->input('registre'),
            'Email' => $request->input('email'),
            'Contact' => $request->input('Contact'),
            'id_parrain' => $parrain_id,
            'id_habitation' => $habitation_id,
            'id_agent' => $agent_id,
            'id_fiche' => $fiche_id,
            'id_activite' => $activite_id,
        ]);
        return redirect()->route('Fiche')->with('success', 'Formulaire Enregister');
    }

    public function show($artisan)
    {

        $artisan = Artisan::find($artisan);

        if ($artisan) {
            return view('artisan', compact('artisan'));
        } else {
            abort(404);
        }
    }

    public function searchartisan(SearchArtisanRequest $request)
    {
        $critere = $request->input('critere');
        $search = $request->input('search');

        $artisans = [];

        if ($critere === "Artisan") {
            $artisans = Artisan::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('Prenom', 'LIKE', "%{$search}%")
                    ->orWhere('Sexe', 'LIKE', "%{$search}%")
                    ->orWhere('Profession', 'LIKE', "%{$search}%")
                    ->orWhere('Dtnaissance', 'LIKE', "%{$search}%")
                    ->orWhere('LieuNaissance', 'LIKE', "%{$search}%")
                    ->orWhere('AnExpProf', 'LIKE', "%{$search}%")
                    ->orWhere('AnProf', 'LIKE', "%{$search}%")
                    ->orWhere('registreMetier', 'LIKE', "%{$search}%")
                    ->orWhere('Email', 'LIKE', "%{$search}%")
                    ->orWhere('Contact', 'LIKE', "%{$search}%");
            })->get();
        } elseif ($critere === "Agent") {
            $agents = Agent::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('Contact', 'LIKE', "%{$search}%")
                    ->orWhere('Zone', 'LIKE', "%{$search}%");
            })->get();
            foreach ($agents as $agent) {
                $artisansAgent = Artisan::where('id_agent', $agent->id)->get();
                $artisans = array_merge($artisans, $artisansAgent->toArray());
            }
        } elseif ($critere === "Activite") {
            $activites = Activite::where(function ($query) use ($search) {
                $query->where('Activite1', 'LIKE', "%{$search}%")
                    ->orWhere('Denomination', 'LIKE', "%{$search}%")
                    ->orWhere('Localisation1', 'LIKE', "%{$search}%")
                    ->orWhere('numRccm', 'LIKE', "%{$search}%")
                    ->orWhere('Activite2', 'LIKE', "%{$search}%")
                    ->orWhere('numeroDeLaDfe', 'LIKE', "%{$search}%")
                    ->orWhere('Localisation2', 'LIKE', "%{$search}%")
                    ->orWhere('numcnps', 'LIKE', "%{$search}%")
                    ->orWhere('Projet', 'LIKE', "%{$search}%")
                    ->orWhere('CoutestimatifEnlettre', 'LIKE', "%{$search}%")
                    ->orWhere('CoutestimatifEnchiffre', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $activites->pluck('id')->toArray();
            if (count($artisanIds) > 0) {
                $artisans = Artisan::whereIn('id_activite', $artisanIds)->get();
            }
        } elseif ($critere === "Fiche") {
            $fiches = Fiche::where(function ($query) use ($search) {
                $query->where('date', 'LIKE', "%{$search}%")
                    ->orWhere('numfiche', 'LIKE', "%{$search}%")
                    ->orWhere('code', 'LIKE', "%{$search}%")
                    ->orWhere('zone', 'LIKE', "%{$search}%")
                    ->orWhere('ordre', 'LIKE', "%{$search}%");
            })->get();
            // Maintenant, récupérez les artisans liés à ces fiches
            $artisanIds = $fiches->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_fiche', $artisanIds)->get();
        } elseif ($critere === "Habitation") {
            $habitation = Habitation::where(function ($query) use ($search) {
                $query->where('Ville', 'LIKE', "%{$search}%")
                    ->orWhere('Quartier', 'LIKE', "%{$search}%")
                    ->orWhere('SituationMatrimoliale', 'LIKE', "%{$search}%")
                    ->orWhere('RégimeMatrimoliale', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $habitation->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_fiche', $artisanIds)->get();
        } elseif ($critere === "Parrain") {
            $parrains = Parrain::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('Prenom', 'LIKE', "%{$search}%")
                    ->orWhere('Sexe', 'LIKE', "%{$search}%")
                    ->orWhere('Profession', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $parrains->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_parrain', $artisanIds)->get();
        } elseif ($critere === "Charge") {
            $Charge = Charge::where(function ($query) use ($search) {
                $query->where('NbrEnfant', 'LIKE', "%{$search}%")
                    ->orWhere('Nbrfille', 'LIKE', "%{$search}%")
                    ->orWhere('NbrGarcon', 'LIKE', "%{$search}%")
                    ->orWhere('Scolarise', 'LIKE', "%{$search}%");
            })->get();
            $ChargeIds = $Charge->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_parrain', $ChargeIds)->get();
        } elseif ($critere === "Assurance") {
            $assurances = Assurance::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('numero', 'LIKE', "%{$search}%");
            })->get();
            $assuranceIds = $assurances->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('id_Assurance', $assuranceIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->get();
        } elseif ($critere === "Finance") {
            $finance = Finances::where(function ($query) use ($search) {
                $query->where('etat', 'LIKE', "%{$search}%")
                    ->orWhere('Nom', 'LIKE', "%{$search}%");
            })->get();

            $financeIds = $finance->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('id_finance', $financeIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->get();
        } elseif ($critere === "Organisation") {
            $Organisation = Organisation::where(function ($query) use ($search) {
                $query->where('etat', 'LIKE', "%{$search}%")
                    ->orWhere('Nom', 'LIKE', "%{$search}%");
            })->get();
            $OrganisationIds = $Organisation->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('organisation_id', $OrganisationIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->get();
        }
        dd($artisans);
        return view('resultats', ['artisans' => $artisans]);
    }
}
