@extends('layouts.master')
@section('title', 'Afficher un Etudiant')

@section('content')
    <h1 align="center"  class="m-4">Afficher les données de l'étudiant</h1>
    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
        <ul class="list-group">
            <li class="list-group-item fw-bold">Id :     <span class="">{{$etudiant->id}}</span></li>
            <li class="list-group-item ">Nom :     <span class="">{{$etudiant->nom}}</span> </li>
            <li class="list-group-item">Prenom :    <span class="">{{$etudiant->prenom}}</span></li>
            <li class="list-group-item ">Sexe :     <span class="">{{$etudiant->sexe}}</span></li>
            <li class="list-group-item ">Filiere :   <span class="">{{$etudiant->filiere_id}}</span></li>
        </ul>
       </div>
   </div>
</div>
@endsection
