<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'age' => 'required|integer|min:0',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'language' => 'nullable|string|max:255',
            'planet' => 'nullable|string|max:255',
            'avatar_path' => 'nullable|string|max:255'
        ]);

        // Hacher le mot de passe
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Création de l'utilisateur
        $user = User::create($validatedData);

        // Redirection vers le tableau de bord
        return redirect()->route('dashboard');
    }
}
