@extends('layouts.master')
@section('title', 'Ajouter un Etudiant')

@section('content')
    <h1 align="center"  class="m-4">Ajouter un étudiant</h1>
    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
            <strong>{{session('status')}}</strong>
          </div>
      @endif
     <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
        @endforeach
      </ul>
    
<form action="/etudiants" method="post">
     @csrf
     @method('post')
  <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input type="text" class="form-control" name="prenom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Email :</label>
    <input type="email" class="form-control" name="prenom">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password :</label>
    <input type="password" class="form-control" name="password">
  </div>

  <div class="input-group-text m-4">
    <label for="sexe" class="form-label">Sexe :</label>&nbsp;&nbsp;
    <input class="form-check-input" type="radio" value="Male" name="sexe" >&nbsp;&nbsp;  Male
&nbsp;&nbsp;
    <input class="form-check-input " type="radio" value="Female" name="sexe" >&nbsp;&nbsp;  Female
  </div>

   <div class="mb-3">
    Filieres :
   <select name="filiere_id" >
    <option selected disabled >Select Filiere</option>
    @foreach ($filieres as $item)
        <option  value="{{$item->id}}">{{$item->nom}}</option>
    @endforeach
   </select>
  </div>
  <input type="submit" class="btn btn-primary m-2"value="Envoyer">
  <input type="reset" class="btn btn-secondary"value="Annuler">
</form>
   </div>
</div>

@endsection