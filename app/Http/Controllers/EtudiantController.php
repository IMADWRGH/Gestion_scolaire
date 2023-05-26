<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;

class EtudiantController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'prenom' => 'required',
            'sexe' => 'required',
            'filiere_id' => 'required'

        ]);
        $user = User::create([
            'name' => $request->input('nom'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $etudiant = Etudiant::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'sexe' => $request->input('sexe'),
            'filiere_id' => $request->input('filiere_id'),
            'user_id' => $user->id,
        ]);
        return redirect('/etudiants');
    }




    public function index()
    {
        $etudiants = Etudiant::all();
        $users = User::all();
        return view('etudiants.index', compact('etudiants', 'users'));
    }

    public function create()
    {
        $list_filiere = Filiere::all();
        return view('etudiants.form', ['filieres' => $list_filiere]);
    }

    public function show(string $id)
    {
        return view('etudiants.show', ['etudiant' => Etudiant::find($id)]);
    }

    public function edit(string $id)
    {
        $user = User::all();
        $filieres = Filiere::all();
        $etudiant = Etudiant::find($id);
        return view('etudiants.edit', compact('user', 'etudiant', 'filieres'));
    }

    public function update(Request $request, string $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->sexe = $request->sexe;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->save();
        return redirect('/etudiants');
    }

    public function destroy(string $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiants');
    }
}
