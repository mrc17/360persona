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
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArtisanRequest;
use App\Http\Requests\SearchArtisanRequest;
use App\Http\Requests\SearchArtisanAvancedRequest;
use Termwind\Components\Dd;

class ArtisanController extends Controller
{
    //Cretion de la function de
    public function create(ArtisanRequest $request)
    {

        $fiche = Fiche::create([
            "dateFiche" => $request->input('dateRecensement'),
            "numfiche" => $request->input('ficheRecensement'),
            "codefiche" => $request->input('codeRecensement'),
            "zonefiche" => $request->input('zoneRecensement'),
            "ordrefiche" => $request->input('ordreRecensement'),
        ]);

        $fiche_id = $fiche->id;

        $finance = Finances::create([
            'etatFinance' => $request->input('etatFinance'),
            'NomFinance' => $request->input('nomfinance'),

        ]);

        $finance_id = $finance->id;

        $Assurance = $request->input('Assurance');
        $autre = $request->input('autre');

        $Assurance = ($Assurance === "AUTREASSURANCE") ? $autre : $Assurance;


        $assurance = Assurance::create([
            'NomAssurance' => $Assurance,
            'numeroAssurance' => $request->input('numeroCnps'),
            'AgenceAssurance' => $request->input('Agence'),
        ]);

        $assurance_id = $assurance->id;

        $organisation = Organisation::create([
            'etatOrganisation' => $request->input('etatFinance'),
            "NomOrganisation" => $request->input('nomfinance')
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
            "NomAgent" => $request->input('NomDeLagentRecenseur'),
            "ContactAgent" => $request->input('contactRecenseur'),
            "ZoneAgent" => $request->input('ZoneRecenseur'),
        ]);

        $agent_id = $agent->id;


        $parrain = Parrain::create([
            'NomParrain' => $request->input('NomDuParrain'),
            "PrenomParrain" => $request->input('PrenomDuParrain'),
            "sexeParrain" => $request->input('sexeDuParrain'),
            "ProfessionParrain" => $request->input('ProfessionDuParrain'),
            "AppreciationParrain" => $request->input('Appreciation_du_bureau')
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
            return redirect()->route('LoginForm');
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
            })->paginate(12);
        } elseif ($critere === "Agent") {
            $agents = Agent::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('Contact', 'LIKE', "%{$search}%")
                    ->orWhere('Zone', 'LIKE', "%{$search}%");
            })->get();
            $agentIds = $agents->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_agent', $agentIds)->paginate(12);
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
            $artisans = Artisan::whereIn('id_activite', $artisanIds)->paginate(12);
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
            $artisans = Artisan::whereIn('id_fiche', $artisanIds)->paginate(12);
        } elseif ($critere === "Habitation") {
            $habitation = Habitation::where(function ($query) use ($search) {
                $query->where('Ville', 'LIKE', "%{$search}%")
                    ->orWhere('Quartier', 'LIKE', "%{$search}%")
                    ->orWhere('SituationMatrimoliale', 'LIKE', "%{$search}%")
                    ->orWhere('RégimeMatrimoliale', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $habitation->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $artisanIds)->paginate(12);
        } elseif ($critere === "Parrain") {
            $parrains = Parrain::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('Prenom', 'LIKE', "%{$search}%")
                    ->orWhere('Sexe', 'LIKE', "%{$search}%")
                    ->orWhere('Profession', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $parrains->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_parrain', $artisanIds)->paginate(12);
        } elseif ($critere === "Charge") {
            $Charge = Charge::where(function ($query) use ($search) {
                $query->where('NbrEnfant', 'LIKE', "%{$search}%")
                    ->orWhere('Nbrfille', 'LIKE', "%{$search}%")
                    ->orWhere('NbrGarcon', 'LIKE', "%{$search}%")
                    ->orWhere('Scolarise', 'LIKE', "%{$search}%");
            })->get();
            $ChargeIds = $Charge->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_parrain', $ChargeIds)->paginate(12);
        } elseif ($critere === "Assurance") {
            $assurances = Assurance::where(function ($query) use ($search) {
                $query->where('Nom', 'LIKE', "%{$search}%")
                    ->orWhere('numero', 'LIKE', "%{$search}%");
            })->get();
            $assuranceIds = $assurances->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('id_Assurance', $assuranceIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->paginate(12);
        } elseif ($critere === "Finance") {
            $finance = Finances::where(function ($query) use ($search) {
                $query->where('etat', 'LIKE', "%{$search}%")
                    ->orWhere('Nom', 'LIKE', "%{$search}%");
            })->get();
            $financeIds = $finance->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('id_finance', $financeIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->paginate(12);
        } elseif ($critere === "Organisation") {
            $Organisation = Organisation::where(function ($query) use ($search) {
                $query->where('etat', 'LIKE', "%{$search}%")
                    ->orWhere('Nom', 'LIKE', "%{$search}%");
            })->get();
            $OrganisationIds = $Organisation->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('organisation_id', $OrganisationIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->paginate(12);
        }

        $nbrArtisanTotal = Artisan::all()->count();
        $user = Auth::user();
        $count = 1;

        // Si aucun résultat n'a été trouvé, définissez $artisans comme un message approprié.
        if ($artisans->isEmpty()) {
            $message = "Aucun résultat trouvé pour votre recherche.";
        }
        $message = "";


        return view('Liste', ['user' => $user, 'artisans' => $artisans, "count" => $count, "nbrArtisanTotal" => $nbrArtisanTotal, "message" => $message]);
    }
    public function showSearchAdvanced()
    {
        $nbrArtisanTotal = Artisan::count();
        return view('showSearchAdvanced', ["nbrArtisanTotal" => $nbrArtisanTotal]);
    }

    public function searchartisanavanced(SearchArtisanAvancedRequest $request)
    {
        // Récupérez les paramètres de recherche du formulaire
        $params = $request->all();
        // Initialisez le tableau des résultats
        $results = Artisan::all()->pluck('id')->toArray();
        // Créez des tableaux pour stocker les critères de chaque groupe
        $groupedCriteria = [];
        $getcolumn = [];
        foreach ($params as $key => $value) {
            // Utilisez une expression régulière pour extraire le groupe (par exemple, "table_0")
            if (preg_match('/^(table|colonne|search)_(\d+)$/', $key, $matches)) {
                $group = $matches[2]; // Le numéro de groupe (0, 1, 2, ...)
                $field = $matches[1]; // Le type de champ (table, colonne, search)

                // Créez un tableau pour chaque groupe s'il n'existe pas encore
                if (!isset($groupedCriteria[$group])) {
                    $groupedCriteria[$group] = [];
                }
                // Ajoutez le critère au groupe correspondant
                $groupedCriteria[$group][$field] = $value;
            }
        }

        foreach ($groupedCriteria as $criteria) {
            // $criteria est un tableau associatif contenant les clés "table", "colonne" et "search"
            $table = $criteria["table"];
            $column = $criteria["colonne"];
            $search = $criteria["search"];
            $getcolumn[] = $column;
            // Construisez dynamiquement le nom de la classe modèle en fonction de la valeur de $table
            $modelClass = "App\\Models\\" . ucfirst($table);

            // Utilisez le modèle Eloquent dynamique pour exécuter la requête
            $result = $modelClass::where($column, "LIKE", "%{$search}%")->get();
            if ($result->isEmpty()) {
                dd("Rien");
            } else {
                if ($table == "Activite") {
                    $ActiviteIds = $result->pluck('id')->toArray();
                    dd($ActiviteIds);
                    $ArtisansIds = Artisan::WhereIn('id_activite', $ActiviteIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Agent') {
                    $AgentIds = $result->pluck('id');
                    $ArtisansIds = Artisan::WhereIn('id_activite', $AgentIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Assurance') {
                    $AgentIds = $result->pluck('id');
                    $HabitationsIds = Habitation::WhereIn('id_Assurance', $AgentIds)->pluck('id')->toArray();
                    $ArtisansIds = Artisan::WhereIn('id_habitation', $HabitationsIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Artisan') {
                    $ArtisansIds = $result->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Charge') {
                    $ChargeIds = $result->pluck('id');
                    $HabitationsIds = Habitation::WhereIn('charge_id', $ChargeIds)->pluck('id')->toArray();
                    $ArtisansIds = Artisan::WhereIn('id_habitation', $HabitationsIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Fiche') {
                    $FichesIds = $result->pluck('id')->toArray();
                    $ArtisansIds = Artisan::WhereIn('id_fiche', $FichesIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Finances') {
                    $FinancesIds = $result->pluck('id')->toArray();
                    $HabitationsIds = Habitation::WhereIn('id_finance', $FinancesIds)->pluck('id')->toArray();
                    $ArtisansIds = Artisan::WhereIn('id_habitation', $HabitationsIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Habitation') {
                    $HabitationsIds = $result->pluck('id');
                    $ArtisansIds = Artisan::WhereIn('id_habitation', $HabitationsIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Organisation') {
                    $OrganisationsIds = $result->pluck('id')->toArray();
                    $HabitationsIds = Habitation::WhereIn('organisation_id', $OrganisationsIds)->pluck('id')->toArray();
                    $ArtisansIds = Artisan::WhereIn('id_habitation', $HabitationsIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                } elseif ($table == 'Parrain') {
                    $ParrainsIds = $result->pluck('id');
                    $ArtisansIds = Artisan::WhereIn('id_habitation', $ParrainsIds)->pluck('id')->toArray();
                    $results = array_intersect($results, $ArtisansIds);
                }
            }
        }
        $artisans = Artisan::WhereIn('id', $results)->get();
        return view('showSearchAdvanced', [
            'artisans' => $artisans,
            'count' => 1,
            'nbrArtisanTotal' => Artisan::count(),
            'columns' => $getcolumn
        ]);
    }
}
