@extends('layouts.master')
@section('title', 'la liste des filières')

@section('content')
    <div class="container">
    <h1 align="center" class="m-4">la liste des filières</h1>
    <div class="d-flex flex-row-reverse m-4 ">
        <a  href="filiere/create" class="rounded-pill p-2 text-bg-primary">Ajouter les filières</a>
    </div>
    <table class="table table-bordered mx-2">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom de Filière</th>
            <th colspan="3">Option</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($filieres as $data)
         <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nom}}</td>
            <td><a href="/filiere/{{$data->id}}/edit"><i class="bi bi-pen-fill"></i></a></td>
            <td><a href="/filiere/{{$data->id}}"><i class="bi bi-eye-fill"></i></a></td>
            <th>
                <form action="/filiere/{{$data->id}}" method="post">
                    @csrf
                    @method('DELETE')
                     <button type="submit" class="rounded-pill btn btn-danger" ><i class="bi bi-trash3"></i></button>
                {{-- <input type="submit" value="<i class='bi bi-trash3'></i>" class="rounded-pill btn btn-danger"></form> --}}
            </th>
         </tr>
     @endforeach
    </tbody>
</table>
</div>
@endsection
