<?php

namespace App\Http\Controllers\api;

use App\Models\Filiere;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiliereController extends Controller
{

    public function index()
    {
        $filieres = Filiere::all();
        return response()->json([
            'status' => true,
            'filieres' => $filieres
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required',
        ]);
        $filiere = Filiere::create($request->all());
        return response()->json([
            'status' => true,
            'message' => "Filière Créé avec succès ",
            'Filiere' => $filiere
        ], 200);
    }



    public function show($id)
    {
        $filiere = Filiere::find($id);

        if (!$filiere) {
            return response()->json([
                'status' => false,
                'message' => 'filiere not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'filiere' => $filiere
        ]);
    }




    public function update(Request $request, Filiere $Filiere)
    {
        $Filiere->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "filiere Mis à jour avec succès",
            'filiere' => $Filiere
        ], 200);
    }



    public function destroy(Filiere $Filiere)
    {
        $Filiere->delete();
        return response()->json([
            'status' => true,
            'message' => "Filiere Supprimé avec succès",
        ], 202);
    }
}
