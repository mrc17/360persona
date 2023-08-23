<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchArtisanRequest extends FormRequest
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
            'critere' => 'required|string|in:Nom,Prenom,Telephone,Date de naissance,Profession,Sexe,Lieu de residence,Agent,Année de d\'experience,Lieu de Naissance,Registre,Email,Situation,Régime,Banque ou microfinance,Organisation professionnelle,Charge,Assurance Maladie,Parrain,Activité,Date de resencement,Fiche de resencement,Code de resencement,Ordre de resencement',
            'search' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'required'=>'Le champ :attribute est obligatoire.',
            'string'=>'Le champ :attribute doit être une chaîne de caractères.',
            "in" => "La valeur du champ :attribute n'est pas valide.",
        ];

    }
}
