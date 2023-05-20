<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>Document</title>
</head>
<body>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
