<?php

namespace App\Http\Controllers;

use App\Models\Fiche;
use App\Models\Parrain;
use App\Models\Finances;
use App\Models\Habitation;
use App\Http\Requests\ArtisanRequest;
use App\Models\Activite;
use App\Models\Agent;
use App\Models\Artisan;
use App\Models\Assurance;
use App\Models\Charge;
use App\Models\Organisation;

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
        return redirect()->route('Fiche')->with('success','Formulaire Enregister');
    }

    public function show($artisan){

        $artisan = Artisan::find($artisan);

        if($artisan){
            return view('artisan', compact('artisan'));
        }else {
            abort(404);
        }
    }

}
