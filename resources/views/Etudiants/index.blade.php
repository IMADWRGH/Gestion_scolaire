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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
