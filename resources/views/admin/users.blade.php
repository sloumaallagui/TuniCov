
@extends('admin.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@section("content")

<div class="panel panel-default" style="margin-top:100px">
    <div class="panel-heading">
        Liste des utilisateurs
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>email</th>
                        <th>Téléphone</th>
                        <th>Adresse</th>
                        <th>Description</th>
                        <th>Date naissance</th>
                        <th>Date de rejoint</th>
                        <th>Opération</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )


                    <tr>
                        <td><img   src="{{asset('storage/profil_pic/'.$user->photo)}}" width="20px" height="20px"     alt="no photo"></td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->tel}}</td>
                        <td>{{$user->adresse}}</td>
                        <td>{{$user->description}}</td>
                        <td>{{$user->date_naiss}}</td>
                        <td>{{$user->created_at}}</td>
                        <td><a class="btn btn-success btn-block mb-1" href="{{url('modifyUser/id='.$user->id)}}">Modifier</a> <br> <a class="btn btn-block btn-danger mt-1" href="{{url('deleteUser/id='.$user->id)}}">Supprimer</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
</body>
</html>
