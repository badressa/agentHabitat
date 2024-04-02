<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('content.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $hashedPassword = Hash::make('badr123');
        
        if (FacadesAuth::attempt($credentials)) {
            // L'utilisateur est authentifié avec succès
            return redirect()->intended('/');
        } else {
            // L'authentification a échoué
            return back()->withErrors(['email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.'])->withInput();
        }
    }

    public function logout()
    {
        FacadesAuth::logout();

        // Redirect the user to a desired page after logout
        return redirect('/login');
    }
}
