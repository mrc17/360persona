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
            'critere' => 'required|string|in:Charge,Finance,Artisan,Parrain,Activite,Habitation,Organisation,Assurance,Fiche'
            ,'search' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'required'=>'Le champ :attribute est obligatoire.',
            'string'=>'Le champ :attribute doit être une chaîne de caractères.',
            "in" => "L'option de recherche :attribute n'est pas valide.",
        ];

    }
}
