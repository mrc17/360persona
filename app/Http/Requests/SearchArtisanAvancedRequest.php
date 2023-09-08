<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchArtisanAvancedRequest extends FormRequest
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
        $regles = [];
        $dataInput = $this->all();

        foreach ($dataInput as $key => $valeur) {
            if (str_starts_with($key, 'table_')) {
                $index = substr($key, 6);
                // Définissez des règles pour chaque paramètre en utilisant $index
                $regles["table_$index"] = ['required', 'string', 'in:Charge,Agent,Finances,Artisan,Parrain,Activite,Habitation,Organisation,Assurance,Fiche'];
            } elseif (str_starts_with($key, 'colonne_')) {
                $index = substr($key, 8);
                $regles["colonne_$index"] = ['required', 'string']; // Exemple de règle
            } elseif (str_starts_with($key, 'search_')) {
                $index = substr($key, 7);
                $regles["search_$index"] = ['required', 'string']; // Exemple de règle
            }
        }

        return $regles;
    }

    public function messages(): array
    {
        return ([
            "required" => "Le champ :attribute est obligatoire.",
            "in" => "Le champ :attribute n'est reconnue comme une table.",
        ]
        );
    }
}
