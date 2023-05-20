<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function index()
    {
        $list_etudiants = Etudiant::all();
        return view('etudiants.index', ['etudiants' => $list_etudiants]);
    }

    public function create()
    {
        $list_filiere = Filiere::all();
        return view('etudiants.form', ['filieres' => $list_filiere]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'filiere_id' => 'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->sexe = $request->sexe;
        $etudiant->filiere_id = $request->filiere_id;
        $etudiant->save();
        return redirect('/etudiants')->with('status', 'L\'etudaint a bien ete ajoute avec success . ');
    }

    public function show(string $id)
    {
        return view('etudiants.show', ['etudiant' => Etudiant::find($id)]);
    }

    public function edit(string $id)
    {
        $filieres = Filiere::all();
        $etudiant = Etudiant::find($id);
        return view('etudiants.edit', compact('etudiant', 'filieres'));
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
