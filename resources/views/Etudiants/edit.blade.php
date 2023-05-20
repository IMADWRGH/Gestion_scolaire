@extends('layouts.master')
@section('title', 'Edit un Etudiant')

@section('content')
    <h1 align="center"  class="m-4">Modifier les renseignements sur les étudiants</h1>
    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
<form action="/etudiants/{{$etudiant->id}}" method="post">
     @csrf
     @method('PUT')
  <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input type="text" class="form-control" name="nom" value="{{$etudiant->nom}}">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input type="text" class="form-control" name="prenom" value="{{$etudiant->prenom}}">
  </div>

  <div class="input-group-text m-4">
    <label for="sexe" class="form-label">Sexe :</label>&nbsp;&nbsp;
    <input class="form-check-input" type="radio" value="Male" name="sexe" value="Male" {{ $etudiant->sexe === 'Male' ? 'checked' : '' }} >&nbsp;&nbsp;  Male
&nbsp;&nbsp;
    <input class="form-check-input " type="radio" value="Female" name="sexe"  value="Male" {{ $etudiant->sexe === 'Female' ? 'checked' : '' }}>&nbsp;&nbsp;  Female
  </div>

   <div class="mb-3">
    Filieres :
   <select name="filiere_id" >
    @foreach ($filieres as $item)
        <option value="{{$etudiant->filiere_id === $item->id ? 'selected' : '' }}">{{$item->nom}}</option>
        <option value="{{$item->id}}">{{$item->nom}}</option>
    @endforeach
   </select>
  </div>
  <input type="submit" class="btn btn-primary m-2"value="Envoyer">
  <input type="reset" class="btn btn-secondary"value="Annuler">
</form>
   </div>
</div>
@endsection
