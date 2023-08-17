<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\signUpRequest;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/Dashboard');
        } else {
            // Authentication failed
            return redirect()->route('LoginForm')->withErrors(['message' => 'les informations d\'identification invalides']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function showInscription(){
        return view('auth.signup');
    }

    public function signup(SignUpRequest $request)
    {
        // Utiliser la méthode create pour créer un nouvel utilisateur
        User::create([

            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('LoginForm')->with('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
    }
}
