<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
    // Afficher le formulaire (GET)
    public function create()
    {
        $roles = [
            'admin' => 'Administrateur',
            'teacher' => 'Enseignant', 
            'parent' => 'Parent'
        ];
        
        return view('users', compact('roles'));
    }

    // Traiter l'enregistrement (POST)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'matricule' => 'required|string|max:50|unique:users,matricule',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required|in:admin,teacher,parent',
        ]);
        
        User::create([
            'matricule' => $request->matricule,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        
        return redirect()->route('login')->with('success', 'Utilisateur créé avec succès!');
    }
}