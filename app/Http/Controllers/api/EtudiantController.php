<?php

namespace App\Http\Controllers\api;

use App\Models\Etudiant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return response()->json([
            'status' => true,
            'etudiants' => $etudiants
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'filiere_id' => 'required'

        ]);

        $etudiant = Etudiant::create($request->all());
        return response()->json([
            'status' => true,
            'message' => "Filière Créé avec succès ",
            'etudiant' => $etudiant
        ], 200);
    }

    public function update(Request $request, Etudiant $Etudiant)
    {
        $Etudiant->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Etudiant Updated successfully!",
            'Etudiant' => $Etudiant
        ], 200);
    }
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return response()->json([
            'status' => true,
            'message' => "etudiants Deleted successfully!",
        ], 200);
    }
}
