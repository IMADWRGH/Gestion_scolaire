@extends('layouts.master')
@section('title', 'Liste des Etudiants')

@section('content')
    <div class="container vh-100">
    <h1 align="center" class="m-4">la liste des étudiants</h1>
    <div class="d-flex flex-row-reverse m-4 ">
        <a  href="etudiants/create" class="rounded-pill p-2 text-bg-primary">Ajouter Etudiant</a>
    </div>
    <table class="table table-bordered mx-2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Sexe</th>
            <th>Filiere</th>
            <th colspan="3">Option</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($etudiants as $data)
         <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nom}}</td>
            <td>{{$data->prenom}}</td>
            <td>{{$data->sexe}}</td>
            <td>{{$data->filiere_id}}</td>
            <td><a href="/etudiants/{{$data->id}}/edit"><i class="bi bi-pen-fill"></i></a></td>
            <td><a href="/etudiants/{{$data->id}}"><i class="bi bi-eye-fill"></i></a></td>
            <th>
                <form action="/etudiants/{{$data->id}}" method="post">
                    @csrf
                    @method('DELETE')
                <input type="submit" value="Delete" class="rounded-pill btn btn-danger"></form>
            </th>
         </tr>
     @endforeach
    </tbody>
</table>
</div>
@endsection
