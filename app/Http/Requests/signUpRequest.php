<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Nom' => [
                'required',
                'string',
                'max:15',
                'unique:agents,nom_agent',
            ],
            'conctat' => [
                'required',
                'numeric',
                'digits_between:8,14',
                'unique:agents,contact_agent',
            ],
            'zone_agent' => [
                'required',
                'string',
            ],
            'username' => [
                'required',
                'string',
                'max:15',
                'unique:users,username',
            ],
            'password' => [
                'required',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
            ],
            'password_confirmation' => [
                'required',
                'same:password',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'Nom.unique' => 'Le nom de l\'agent est déjà utilisé.',
            'Nom.required' => 'Le nom de l\'agent est obligatoire.',
            'Nom.string' => 'Le nom de l\'agent doit être une chaîne de caractères.',
            'zone_agent.required' => 'La zone_agent de l\'agent est obligatoire.',
            'zone_agent.string' => 'La  zone_agent de l\'agent doit être une chaîne de caractères.',
            'Nom.max' => 'Le nom de l\'agent ne doit pas dépasser :max caractères.',
            'conctat.unique' => 'Le contact de l\'agent est déjà utilisé.',
            'conctat.required' => 'Le contact de l\'agent est obligatoire.',
            'conctat.numeric' => 'Le contact de l\'agent doit être numérique.',
            'conctat.digits_between' => 'Le contact de l\'agent doit avoir entre :min et :max chiffres.',
            'username.unique' => 'Le nom d\'utilisateur est déjà utilisé.',
            'username.required' => 'Le nom d\'utilisateur est obligatoire.',
            'username.string' => 'Le nom d\'utilisateur doit être une chaîne de caractères.',
            'username.max' => 'Le nom d\'utilisateur ne doit pas dépasser :max caractères.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.regex' => 'Le mot de passe ne répond pas aux critères requis.',
            'password_confirmation.required' => 'La confirmation du mot de passe est obligatoire.',
            'password_confirmation.same' => 'La confirmation du mot de passe ne correspond pas au mot de passe saisi.',
        ];
    }
}
