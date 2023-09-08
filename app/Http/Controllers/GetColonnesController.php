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
use Illuminate\Support\Facades\Schema;

class GetColonnesController extends Controller
{
    //
    public function getColonnes($table)
    {
        switch ($table) {
            case "Agent":
                $model = new Agent();
                break;
            case "Charge":
                $model = new Charge();
                break;
            case "Artisan":
                $model = new Artisan();
                break;
            case "Fiche":
                $model = new Fiche();
                break;
            case "Parrain":
                $model = new Parrain();
                break;
            case "Finances":
                $model = new Finances();
                break;
            case "Activite":
                $model = new Activite();
                break;
            case "Assurance":
                $model = new Assurance();
                break;
            case "Habitation":
                $model = new Habitation();
                break;
            case "Organisation":
                $model = new Organisation();
                break;
                // Ajoutez d'autres cas pour chaque table que vous souhaitez gérer
            default:
                return response()->json(['error' => 'Table non prise en charge'], 404);
        }

        $tableName = $model->getTable();
        $columns = Schema::getColumnListing($tableName);

        return response()->json($columns);
    }
}
