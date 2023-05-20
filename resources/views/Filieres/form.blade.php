@extends('layouts.master')
@section('title', 'Ajouter les filières')

@section('content')
    <h1 align="center"  class="m-4">Ajouter les filières</h1>
<div class="container min-vh-80 d-flex justify-content-center align-items-center">
<form action="/filiere" method="post">
     @csrf
     @method('post')
  <div class="mb-3">
    <label for="nom" class="form-label">Nom de Filière :</label>
    <input type="text" class="form-control" name="nom">
  </div> 
  <input type="submit" class="btn btn-primary m-2"value="Envoyer">
  <input type="reset" class="btn btn-secondary"value="Annuler">
</form>
   
</div>
@endsection
