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


class ArtisanController extends Controller
{
    //Cretion de la function de

    public function create(ArtisanRequest $request)
    {

        // Créez d'abord la fiche
        $fiche = Fiche::create([
            "date_fiche" => $request->input('dateRecensement') ?: "non renseigné",
            "num_fiche" => $request->input('ficheRecensement') ?: "non renseigné",
            "code_fiche" => $request->input('codeRecensement') ?: "non renseigné",
            "zone_fiche" => $request->input('ZoneRecenseur') ?: "non renseigné",
            "ordre_fiche" => $request->input('ordreRecensement') ?: "non renseigné",
        ]);

        // Créez l'entité Finances liée à la fiche
        $finance = Finances::create([
            'etat_finance' => $request->input('etatFinance') ?: "non renseigné",
            'nom_finance' => $request->input('nomfinance') ?: "non renseigné",
        ]);

        // Récupérez l'ID de l'entité Finances créée
        $finance_id = $finance->id;

        // Créez l'entité Assurance liée à la fiche
        $assurance = Assurance::create([
            'nom_assurance' => $request->input('Assurance') ?: "non renseigné",
            'numero_assurance' => $request->input('numeroCnps') ?: "non renseigné",
            'agence_assurance' => $request->input('Agence') ?: "non renseigné",
        ]);

        // Récupérez l'ID de l'entité Assurance créée
        $assurance_id = $assurance->id;

        // Créez l'entité Organisation liée à la fiche
        $organisation = Organisation::create([
            'etat_organisation' => $request->input('etatFinance') ?: "non renseigné",
            "nom_organisation" => $request->input('nomfinance') ?: "non renseigné",
        ]);

        // Récupérez l'ID de l'entité Organisation créée
        $organisation_id = $organisation->id;


        // Créez l'entité Charge liée à la fiche
        $charge = Charge::create([
            'nbr_enfant' => $request->input('NbreEnfant') ?: 0,
            'nbr_fille' => $request->input('NbreFille') ?: 0,
            'nbr_garcon' => $request->input('NbreGarcon') ?: 0,
            'scolarise' => $request->input('Scolaire') ?: 0,
        ]);

        // Récupérez l'ID de l'entité Charge créée
        $charge_id = $charge->id;


        // Créez l'entité Habitation liée à la fiche
        $habitation = Habitation::create([
            'ville' => $request->input('VilleArtisan'),
            'commune' => $request->input('CommuneArtisan'),
            'quartier' => $request->input('QuartierArtisan'),
            'situation_matrimoliale' => $request->input('Situation') ?: "non renseigné",
            'régime_matrimoliale' => $request->input('Regime') ?: "non renseigné",
            'id_assurance' => $assurance->id,
            'id_finance' => $finance->id,
            'organisation_id' => $organisation->id,
            'charge_id' => $charge->id,
        ]);

        // Récupérez l'ID de l'entité Habitation créée
        $habitation_id = $habitation->id;
        // Créez l'entité Activite liée à la fiche

        $activite = Activite::create([
            'activite1' => $request->input('Activite_1') ?: "non renseigné",
            'denomination' => $request->input('denomination') ?: "non renseigné",
            'localisation1' => $request->input('Localisation_1') ?: "non renseigné",
            'num_rccm' => $request->input('numero_rccm') ?: "non renseigné",
            'activite2' => $request->input('Activite_2') ?: "non renseigné",
            'numero_de_la_dfe' => $request->input('numeroDeLaDfe') ?: "non renseigné",
            'localisation2' => $request->input('Localisation_2') ?: "non renseigné",
            'num_cnps' => $request->input('numeroCnpsActivite') ?: "non renseigné",
            'projet' => $request->input('Projet') ?: "non renseigné",
            'cout_estimatif_en_lettre' => $request->input('CoutEstimatifEnLettre') ?: "Zero",
            'cout_estimatif_en_chiffre' => $request->input('CoutEstimatifEnChiffre') ?: 0,
        ]);

        // Récupérez l'ID de l'entité Activite créée
        $activite_id = $activite->id;

        // Créez l'entité Parrain liée à la fiche
        $parrain = Parrain::create([
            'nom_parrain' => $request->input('NomDuParrain') ?: "non renseigné",
            'prenom_parrain' => $request->input('PrenomDuParrain') ?: "non renseigné",
            'sexe_parrain' => $request->input('sexeDuParrain') ?: "non renseigné",
            'profession_parrain' => $request->input('ProfessionDuParrain') ?: "non renseigné",
            'appreciation_parrain' => $request->input('Appreciation_du_bureau') ?: "non renseigné",
        ]);

        // Récupérez l'ID de l'entité Parrain créée
        $parrain_id = $parrain->id;
        // Créez l'entité Artisan liée à la fiche
        $artisan = Artisan::create([
            'nom' => $request->input('NomArtisan') ?: "non renseigné",
            'prenom' => $request->input('PrenomArtisan') ?: "non renseigné",
            'dtnaissance' => $request->input('DateNaissanceArtisan') ?: "non renseigné",
            'lieu_naissance' => $request->input('LieuNaissanceArtisan') ?: "non renseigné",
            'profession' => $request->input('ProfessionArtisan') ?: "non renseigné",
            'an_exp_prof' => $request->input('AnneeExperienceProfessionnelleArtisan') ?: "non renseigné",
            'sexe' => $request->input('sexeartisan') ?: "non renseigné",
            'an_prof' => $request->input('AnneeProfession') ?: "non renseigné",
            'registre_metier' => $request->input('registre') ?: "non renseigné",
            'email' => $request->input('email') ?: "non renseigné",
            'contact' => $request->input('Contact') ?: "non renseigné",
            'id_parrain' => $parrain->id,
            'id_habitation' => $habitation->id,
            'id_agent' => $request->input('agent_id'), //
            'id_fiche' => $fiche->id,
            'id_activite' => $activite->id,
        ]);


        return redirect()->route('Fiche')->with('success', "Artisan #$artisan->nom est Enregisté");
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
        return view('showSearchAdvanced', ["nbrArtisanTotal" => $nbrArtisanTotal, "autrecolonnes" => [],]);
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
                return view('showSearchAdvanced', [
                    'message' => 'Aucun artisans trouvés',
                    'nbrArtisanTotal' => Artisan::count(),
                ]);
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

        $columns = [
            "Scolarise",
            "SituationMatrimoliale",
            "RégimeMatrimoliale",
            "Ville",
            "Commune",
            "Quartier",
            "NbrEnfant",
            "Nbrfille",
            "NbrGarcon",
            "NomFinance",
            "etatFinance",
            "etatOrganisation",
            "NomOrganisation",
            "NomAssurance",
            "numeroAssurance",
            "AgenceAssurance",
            "date",
            "numfiche",
            "zone",
            "ordre",
            "NomAgent",
            "ZoneAgent",
            "Dtnaissance",
            "LieuNaissance",
            "Profession",
            "AnExpProf",
            "Sexe",
            "registreMetier",
            "Email",
            "Contact",
            "AnProf",
            "NomParrain",
            "PrenomParrain",
            "sexeParrain",
            "ProfessionParrain",
            "AppreciationParrain",
            "dateFiche",
            "numfiche",
            "codefiche",
            "zonefiche",
            "ordrefiche",
            "Activite1",
            "Denomination",
            "Localisation1",
            "numRccm",
            "Activite2",
            "numeroDeLaDfe",
            "Localisation2",
            "numcnps",
            "Projet",
            "CoutestimatifEnlettre",
            "CoutestimatifEnchiffre",
            "ContactAgent"
        ];

        $autrecolonnes = (array_diff($columns, $getcolumn));

        $artisans = Artisan::WhereIn('id', $results)->get();
        return view('showSearchAdvanced', [
            'artisans' => $artisans,
            'count' => 1,
            'autrecolonnes' => $autrecolonnes,
            'nbrArtisanTotal' => Artisan::count(),
            'columns' => $getcolumn
        ]);
    }
}
