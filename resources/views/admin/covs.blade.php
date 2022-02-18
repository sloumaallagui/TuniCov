
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
        Liste des covoiturages publié
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Profil pic</th>

                        <th>id u</th>
                        <th>Utilisateur</th>
                        <th>id</th>
                        <th>Destination de départ</th>
                        <th>Destination d'arrivage</th>
                        <th>Description</th>
                        <th>Nb_vue</th>
                        <th>Date</th>
                        <th>Prix</th>
                        <th>Nombre de places</th>
                        <th>Opération</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($covs as $cov )


                    <tr>
                        <td><img   src="{{asset('storage/profil_pic/'.$cov->user->photo)}}" width="20px" height="20px"     alt="no photo"></td>

                        <td>{{$cov->user->id }}</td>
                        <td> {{$cov->user->name}} {{$cov->user->lastname}}</td>
                        <td>{{$cov->id}}</td>
                        <td>{{$cov->dest_deps->name}}</td>
                        <td>{{$cov->dest_arrives->name}}</td>
                        <td>{{$cov->description}}</td>
                        <td>{{$cov->nb_vue}}</td>
                        <td>{{$cov->date}}</td>
                        <td>{{$cov->prix}}</td>
                        <td>{{$cov->nb_place}}</td>
                        <td><a class="btn btn-danger mt-2" href="{{url('deleteCov/id='.$cov->id)}}">Supprimer</a></td>
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
