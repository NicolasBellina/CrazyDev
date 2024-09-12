<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:4',
            'language' => 'required|string|max:255',
            'planet' => 'required|string|max:255',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'avatar_path' => 'nullable|image|max:2048',
        ]);

        try {

            $avatarPath = 'img/avatar/par_default.png';
            if ($request->hasFile('avatar_path')) {
                $file = $request->file('avatar_path');
                $originalFileName = $file->getClientOriginalName(); // Get original file name
                $file->move(public_path('img/avatar'), $originalFileName);
                $avatarPath = 'img/avatar/' . $originalFileName;
            }
    
            // Hacher le mot de passe
            $validatedData['password'] = Hash::make($validatedData['password']);
    
            $user = new User();
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->age = $request->input('age');
            $user->email = $request->input('email');
            $user->password = $validatedData['password'];
            $user->language = $request->input('language');
            $user->planet = $request->input('planet');
            $user->height = $request->input('height');
            $user->weight = $request->input('weight');
            $user->avatar_path = $avatarPath;
    
            $user->save();
    
            Auth::login($user);
            return redirect()->route('forum');

        } catch (\Exception $ex) {
            Log::error('Erreur à la création : ' . $ex->getMessage());
        }

    }
}
