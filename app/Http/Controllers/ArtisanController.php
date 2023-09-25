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
use App\Http\Requests\ArtisanModifyRequest;
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


        return redirect()->route('Fiche')->with('success', "Artisan $artisan->nom est Enregisté");
    }


    public function modify(ArtisanModifyRequest $request)
    {
        ///Verification du permission

        $id_agent = $request->input('agent_id');

        $agent = Agent::where([
            'id' => $id_agent,
        ])->first(); // Recherchez l'agent correspondant

        if (!$agent) {
            // Si aucun agent correspondant n'est trouvé, redirigez vers une autre route
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }

        // Mette à jour les valeurs de l'agent avec les nouvelles valeurs du formulaire
        $agent->nom_agent = $request->input('NomDeLagentRecenseur');
        $agent->contact_agent = $request->input('contactRecenseur');
        $agent->save();

        $fiche = Fiche::where('num_fiche', $request->input('ficheRecensement'))->first();

        if (!$fiche) {
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }
        $fiche->zone_fiche = $request->input('ZoneRecenseur');
        $fiche->save();

        $artisan = Artisan::where('id', $request->input('artisan'))->first();

        if (!$artisan) {
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }

        $artisan->nom = $request->input('NomArtisan');
        $artisan->prenom = $request->input('PrenomArtisan');
        $artisan->dtnaissance = $request->input('DateNaissanceArtisan');
        $artisan->lieu_naissance = $request->input('LieuNaissanceArtisan');
        $artisan->profession = $request->input('ProfessionArtisan');
        $artisan->an_exp_prof = $request->input('AnneeExperienceProfessionnelleArtisan');
        $artisan->sexe = $request->input('sexeartisan');
        $artisan->an_prof = $request->input('AnneeProfession');
        $artisan->registre_metier = $request->input('registre');
        $artisan->email = $request->input('email');
        $artisan->contact = $request->input('Contact');
        $artisan->save();

        $habitation = Habitation::where('id', $artisan->id_habitation)->first();
        $habitation->ville = $request->input('VilleArtisan');
        $habitation->commune = $request->input('CommuneArtisan');
        $habitation->quartier = $request->input('QuartierArtisan');
        $habitation->regime_matrimoliale = $request->input('registre');
        $habitation->situation_matrimoliale = $request->input('Situation');
        $habitation->save();

        $finance = Finances::where('id', $habitation->id_finance)->first();

        if (!$finance) {
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }

        $finance->etat_finance = $request->input('etatFinance');
        $finance->nom_finance = $request->input('nomfinance');
        $finance->save();

        $organisation = Organisation::where('id', $habitation->organisation_id)->first();

        if (!$organisation) {
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }
        $organisation->etat_organisation = $request->input('reponseOrganition');
        $organisation->nom_organisation = $request->input('NomOrganisation');

        $organisation->save();

        $parrain = Parrain::where('id', $artisan->id_parrain)->first();
        $parrain->nom_parrain = $request->input('NomDuParrain');
        $parrain->prenom_parrain = $request->input('PrenomDuParrain');
        $parrain->sexe_parrain = $request->input('sexeDuParrain');
        $parrain->profession_parrain = $request->input('ProfessionDuParrain');
        $parrain->appreciation_parrain = $request->input('Appreciation_du_bureau');
        $parrain->save();

        $assurance = Assurance::where('id', $habitation->id_assurance)->first();

        if (!$assurance) {
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }

        $assurance->nom_assurance = $request->input('Assurance');
        $assurance->numero_assurance = $request->input('numeroCnps');
        $assurance->agence_assurance = $request->input('Agence');
        $assurance->save();

        $charge = Charge::where('id', $habitation->charge_id)->first();
        if (!$charge) {
            return redirect()->route('show-artisan', ['artisan' => $request->input('artisan')]);
        }
        $charge->nbr_enfant = $request->input('NbreEnfant');
        $charge->nbr_fille = $request->input('NbreFille');
        $charge->nbr_garcon = $request->input('NbreGarcon');
        $charge->scolarise = $request->input('Scolaire');
        $charge->save();

        dd($charge);

        $activite = Activite::where('id', $artisan->id_activite)->first();
        $activite->activite1 = $request->input('Activite_1');
        $activite->denomination = $request->input('denomination');
        $activite->localisation1 = $request->input('Localisation_1');
        $activite->num_rccm = $request->input('numero_rccm');
        $activite->activite2 = $request->input('Activite_2');
        $activite->numero_de_la_dfe = $request->input('numeroDeLaDfe');
        $activite->localisation2 = $request->input('Localisation_2');
        $activite->num_cnps = $request->input('numeroCnpsActivite');
        $activite->projet = $request->input('Projet');
        $activite->cout_estimatif_en_chiffre = $request->input('CoutEstimatifEnChiffre');
        $activite->cout_estimatif_en_lettre = $request->input('CoutEstimatifEnLettre');
        $activite->save();


        dd($artisan);
        // Mette à jour les valeurs de la fiche lie  avec les nouvelles valeurs du formulaire
    }




    public function showmodifyartisan($id)
    {
        // Récupérer l'artisan avec l'ID spécifié
        $artisan = Artisan::find($id);

        // Vérifier si l'artisan existe
        if (!$artisan) {
            // Rediriger en cas d'artisan non trouvé (ajoutez ici la logique appropriée)
            return redirect()->route('show-artisan')->with('error', "L'artisan n'a pas été trouvé.");
        }

        // Récupérer l'utilisateur actuellement authentifié
        $user = Auth::user();

        // Récupérer l'ID de l'agent associé à l'utilisateur
        $id_agent = $user->id;

        // Récupérer l'ID de l'utilisateur associé à l'agent
        $agent = Agent::where('id', $id_agent)->first();

        // Vérifier si l'agent existe
        if (!$agent) {
            // Rediriger en cas d'agent non trouvé (ajoutez ici la logique appropriée)
            return redirect()->route('show-artisan')->with('error', "Votre agent n'a pas été trouvé.");
        }

        // Vérifier si l'agent a la permission de modifier l'artisan
        if ($artisan->id_agent != $agent->user_id) {
            return redirect()->route('show-artisan', ['artisan' => $artisan->id])->with('error', "Vous n'avez pas le droit de modifier cet artisan.");
        }

        // Si tout est en ordre, afficher la vue pour modifier l'artisan
        return view('artisan-modify', compact('artisan'));
    }


    public function show($artisan)
    {
        $artisan = Artisan::find($artisan);

        if ($artisan) {
            return view('artisan', compact('artisan'));
        } else {
            return redirect()->route('Liste')->with('error', 'Artisan n\'existe pas');
        }
    }

    public function delete($id)
    {
        // Rechercher l'artisan avec l'ID spécifié, en déclenchant une exception si l'artisan n'est pas trouvé
        try {
            $artisan = Artisan::findOrFail($id);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Rediriger en cas d'artisan non trouvé avec un message d'erreur approprié
            return redirect()->route('Liste')->with('error', "L'artisan n'a pas été trouvé.");
        }

        // Vérifiez d'abord si l'artisan a une habitation associée
        if ($artisan->habitation) {
            // Supprimez d'abord l'habitation associée à cet artisan
            $artisan->habitation->delete();
        }

        // Supprimez ensuite l'artisan lui-même
        $artisan->delete();

        // Rediriger avec un message de succès après la suppression
        return redirect()->route('Liste')->with('success', "Artisan supprimé avec succès");
    }



    public function searchartisan(SearchArtisanRequest $request)
    {

        $critere = $request->input('critere');
        $search = $request->input('search');

        $artisans = [];

        if ($critere === "Artisan") {
            $artisans = Artisan::where(function ($query) use ($search) {
                $query->where('nom', 'LIKE', "%{$search}%")
                    ->orWhere('prenom', 'LIKE', "%{$search}%")
                    ->orWhere('sexe', 'LIKE', "%{$search}%")
                    ->orWhere('profession', 'LIKE', "%{$search}%")
                    ->orWhere('dtnaissance', 'LIKE', "%{$search}%")
                    ->orWhere('lieu_naissance', 'LIKE', "%{$search}%")
                    ->orWhere('an_exp_prof', 'LIKE', "%{$search}%")
                    ->orWhere('an_prof', 'LIKE', "%{$search}%")
                    ->orWhere('registre_metier', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%")
                    ->orWhere('contact', 'LIKE', "%{$search}%");
            })->paginate(12);
        } elseif ($critere === "Agent") {
            $agents = Agent::where(function ($query) use ($search) {
                $query->where('nom_agent', 'LIKE', "%{$search}%")
                    ->orWhere('contact_agent', 'LIKE', "%{$search}%")
                    ->orWhere('zone_agent', 'LIKE', "%{$search}%");
            })->get();
            $agentIds = $agents->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_agent', $agentIds)->paginate(12);
        } elseif ($critere === "Activite") {
            $activites = Activite::where(function ($query) use ($search) {
                $query->where('activite1', 'LIKE', "%{$search}%")
                    ->orWhere('denomination', 'LIKE', "%{$search}%")
                    ->orWhere('localisation1', 'LIKE', "%{$search}%")
                    ->orWhere('num_rccm', 'LIKE', "%{$search}%")
                    ->orWhere('activite2', 'LIKE', "%{$search}%")
                    ->orWhere('numero_de_LaDfe', 'LIKE', "%{$search}%")
                    ->orWhere('localisation2', 'LIKE', "%{$search}%")
                    ->orWhere('num_cnps', 'LIKE', "%{$search}%")
                    ->orWhere('projet', 'LIKE', "%{$search}%")
                    ->orWhere('cout_estimatif_en_lettre', 'LIKE', "%{$search}%")
                    ->orWhere('cout_estimatif_en_chiffre', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $activites->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_activite', $artisanIds)->paginate(12);
        } elseif ($critere === "Fiche") {
            $fiches = Fiche::where(function ($query) use ($search) {
                $query->where('date_fiche', 'LIKE', "%{$search}%")
                    ->orWhere('num_fiche', 'LIKE', "%{$search}%")
                    ->orWhere('code_fiche', 'LIKE', "%{$search}%")
                    ->orWhere('zone_fiche', 'LIKE', "%{$search}%")
                    ->orWhere('ordre_fiche', 'LIKE', "%{$search}%");
            })->get();
            // Maintenant, récupérez les artisans liés à ces fiches
            $artisanIds = $fiches->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_fiche', $artisanIds)->paginate(12);
        } elseif ($critere === "Habitation") {
            $habitation = Habitation::where(function ($query) use ($search) {
                $query->where('ville', 'LIKE', "%{$search}%")
                    ->orWhere('quartier', 'LIKE', "%{$search}%")
                    ->orWhere('situation_matrimoliale', 'LIKE', "%{$search}%")
                    ->orWhere('regime_matrimoliale', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $habitation->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $artisanIds)->paginate(12);
        } elseif ($critere === "Parrain") {
            $parrains = Parrain::where(function ($query) use ($search) {
                $query->where('nom_parrain', 'LIKE', "%{$search}%")
                    ->orWhere('prenom_parrain', 'LIKE', "%{$search}%")
                    ->orWhere('sexe_parrain', 'LIKE', "%{$search}%")
                    ->orWhere('profession_parrain', 'LIKE', "%{$search}%");
            })->get();
            $artisanIds = $parrains->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_parrain', $artisanIds)->paginate(12);
        } elseif ($critere === "Charge") {
            $Charge = Charge::where(function ($query) use ($search) {
                $query->where('nbr_fille', 'LIKE', "%{$search}%")
                    ->orWhere('nbr_enfant', 'LIKE', "%{$search}%")
                    ->orWhere('nbr_garcon', 'LIKE', "%{$search}%")
                    ->orWhere('scolaire', 'LIKE', "%{$search}%");
            })->get();
            $ChargeIds = $Charge->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_parrain', $ChargeIds)->paginate(12);
        } elseif ($critere === "Assurance") {
            $assurances = Assurance::where(function ($query) use ($search) {
                $query->where('nom_assurance', 'LIKE', "%{$search}%")
                    ->orWhere('numero_assurance', 'LIKE', "%{$search}%")
                    ->orWhere('agence_assurance', 'LIKE', "%{$search}%");
            })->get();
            $assuranceIds = $assurances->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('id_Assurance', $assuranceIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->paginate(12);
        } elseif ($critere === "Finance") {
            $finance = Finances::where(function ($query) use ($search) {
                $query->where('etat_finance', 'LIKE', "%{$search}%")
                    ->orWhere('nom_finance', 'LIKE', "%{$search}%");
            })->get();
            $financeIds = $finance->pluck('id')->toArray();
            $habitationIds = Habitation::whereIn('id_finance', $financeIds)->pluck('id')->toArray();
            $artisans = Artisan::whereIn('id_habitation', $habitationIds)->paginate(12);
        } elseif ($critere === "Organisation") {
            $Organisation = Organisation::where(function ($query) use ($search) {
                $query->where('etat_organisation', 'LIKE', "%{$search}%")
                    ->orWhere('nom_organisation', 'LIKE', "%{$search}%");
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

        if (empty($request->all())) {
            return view('showSearchAdvanced', [
                'message' => 'Aucun artisans trouvés',
                'nbrArtisanTotal' => Artisan::count(),
            ]);
        } else {

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
                'dtnaissance',
                'lieu_naissance',
                'profession',
                'an_exp_prof',
                'sexe',
                'an_prof',
                'registre_metier',
                'email',
                'contact',
                'nom_organisation',
                'etat_organisation',
                'nom_parrain',
                'prenom_parrain',
                'sexe_parrain',
                'profession_parrain',
                'appreciation_parrain',
                'activite1',
                'denomination',
                'localisation1',
                'num_rccm',
                'activite2',
                'numero_de_la_dfe',
                'localisation2',
                'num_cnps',
                'projet',
                'cout_estimatif_en_lettre',
                'cout_estimatif_en_chiffre',
                'ville',
                'commune',
                'quartier',
                'situation_matrimoliale',
                'regime_matrimoliale',
                'nbr_enfant',
                'nbr_fille',
                'nbr_garcon',
                'scolarise',
                'nom_agent',
                'contact_agent',
                'zone_agent',
                'etat_finance',
                'nom_finance',
                'nom_assurance',
                'numero_assurance',
                'agence_assurance',
                'date_fiche',
                'num_fiche',
                'code_fiche',
                'zone_fiche',
                'ordre_fiche',
            ];

            $autrecolonnes = (array_diff($columns, $getcolumn));

            $autrecolonnes = array_unique($autrecolonnes);

            sort($autrecolonnes);


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
}
