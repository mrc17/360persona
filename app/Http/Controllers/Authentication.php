<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\signUpRequest;
use App\Models\Agent;
use Illuminate\Support\Facades\Auth;

class Authentication extends Controller
{
    public function showLoginForm()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }
        return redirect()->intended('/Dashboard');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/Dashboard');
            $user=Auth::user();
            dd($user->user_id);
            session()->put('user_id', );
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
        if (!Auth::check()) {
            return view('auth.signup');
        }
        return view('auth.signup');
    }

    public function signup(SignUpRequest $request)
    {
        // Utiliser la méthode create pour créer un nouvel utilisateur
        $user=User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        Agent::create([
            'nom_agent' => $request->input('Nom'),
            'contact_agent' => $request->input('conctat'),
            'zone_agent' => $request->input('zone_agent'),
            'user_id' => $user->id,
        ]);



        return redirect()->route('LoginForm')->with('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
    }
}
