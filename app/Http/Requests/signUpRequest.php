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
            'username' => ['required', 'string', 'max:15', 'unique:users,username'],
            'password' => ['required', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'],
            'password_confirmation' => ['required', 'same:password'],
        ];
    }

    public function messages(): array
    {
        return [
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
