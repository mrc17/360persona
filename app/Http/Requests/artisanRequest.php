<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtisanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "NomDeLagentRecenseur" => "required|string|max:255",
            "contactRecenseur" => "required|string|max:255",
            "ZoneRecenseur" => "required|string|max:255",
            "NomArtisan" => "required|string|max:255",
            "PrenomArtisan" => "required|string|max:255",
            "DateNaissanceArtisan" => "required|date",
            "LieuNaissanceArtisan" => "required|string|max:255",
            "ProfessionArtisan" => "required|string|max:255",
            "AnneeExperience" => "required|integer",
            "sexeDeLArtisan" => "required|in:Homme,Femme",
            "registre" => "required|in:Oui,Non",
            "AnneeProfession" => "required|integer",
            "Contact" => "required|string|max:255",
            "email" => "required|email|max:255",
            "VilleArtisan" => "required|string|max:255",
            "CommuneArtisan" => "required|string|max:255",
            "QuartierArtisan" => "required|string|max:255",
            "Projet" => "required|string|max:255",
            "denomination" => "required|string|max:255",
            "Communeartisan" => "required|string|max:255",
            "Localisation_2" => "required|string|max:255",
            "Localisation_1" => "required|string|max:255",
            "Activite_1" => "required|string|max:255",
            "Activite_2" => "required|string|max:255",
            "numero_rccm" => "required|string|max:255",
            "numeroDeLaDfe" => "required|string|max:255",
            "AnneeDeProfessionneDeArtisan" => "required|numeric|max:255",
            "CoutEstimatifEnLettre" => "required|numeric|max:255",
            "CoutEstimatifEnChiffre" => "required|numeric|max:255",
            "sexeDuParrain" => "required|in:Homme,Femme",
            "Situation" => "required|in:Célibataire,Marié",
            "Quartierartisan" => "required|string|max:255",
            "Regime" => "required|in:Communauté de bien,Séparation de bien",
            "Assurance" => "required|in:CMU,CNPS",
            "autre" => "nullable|max:255|min:5|string",
            "numeroCnps" => "required|string|max:255",
            "Agence" => "required|string|max:255",
            "etatFinance" => "required|in:Oui,Non",
            "nomFinance" => "required|string|max:255",
            "reponseOrganition" => "required|in:Oui,Non",
            "NomOrganisation" => "required|string|max:255",
            "NbreEnfant" => "required|integer",
            "NbreFille" => "required|integer",
            "NbreGarcon" => "required|integer",
            "Scolaire" => "required|integer",
            "NomDuParrain" => "required|string|max:255",
            "PrenomDuParrain" => "required|string|max:255",
            "ProfessionDuParrain" => "required|string|max:255",
            "Appreciation_du_bureau" => "required|string|max:255",
            "checked" => "required|in:checked",
        ];
    }
    public function messages()
{
    return [
        "required" => "Le champ :attribute est obligatoire.",
        "email" => "Le champ :attribute doit être une adresse e-mail valide.",
        "max" => "Le champ :attribute ne peut pas dépasser :max caractères.",
        "in" => "La valeur du champ :attribute n'est pas valide.",
        "integer" => "Le champ :attribute doit être un nombre entier.",
        "date" => "Le champ :attribute doit être une date valide.",
        "string" => "Le champ :attribute doit être une chaîne de caractères.",
        "min" => "Le champ :attribute doit contenir au moins :min caractères.",
    ];
}
}
