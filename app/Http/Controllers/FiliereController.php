<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    // public function liste()
    // {
    //     $filieres = Filiere::all();
    //     return view('etudiants.form', compact('filieres'));
    // }
    public function index()
    {
        $list_filieres = Filiere::all();
        return view('filieres.index', ['filieres' => $list_filieres]);
    }

    public function create()
    {
        return view('filieres.form');
    }

    public function store(Request $request)
    {
        $filiere = new Filiere();
        $filiere->nom = $request->nom;
        $filiere->save();
        return redirect('/filiere');
    }

    public function show(string $id)
    {
        return view('filieres.show', ['filiere' => Filiere::find($id)]);
    }

    public function edit(string $id)
    {
        return view('filieres.edit', ['filiere' => Filiere::find($id)]);
    }

    public function update(Request $request, string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->nom = $request->nom;
        $filiere->save();
        return redirect('/filiere');
    }

    public function destroy(string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect('/filiere');
    }
}
