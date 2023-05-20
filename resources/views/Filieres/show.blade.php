@extends('layouts.master')
@section('title', 'Afficher un filière')

@section('content')
    <h1 align="center"  class="m-4">Afficher les données de filière</h1>
    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
        <ul class="list-group">
            <li class="list-group-item fw-bold">Id :     <span class="">{{$filiere->id}}</span></li>
            <li class="list-group-item ">Nom :     <span class="">{{$filiere->nom}}</span> </li>
        </ul>
       </div>
   </div>
</div>
@endsection
