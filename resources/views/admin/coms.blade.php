
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
<div class="panel panel-default" style="margin-top:50px" >
    <div class="panel-heading">
        Statistique totale
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nombre totale des Questions/Répenses </th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <td>{{$coms->count()}}</td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="panel panel-default" style="margin-top:40px">
    <div class="panel-heading">
        Liste des Questions/Répenses publié
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Profil pic </th>
                        <th>id </th>
                        <th>Content</th>
                        <th>Covoiturage id</th>
                        <th>utilisateur id</th>
                        <th>Nom d'utilisateur</th>
                        <th>Date de creation</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($coms as $com )


                    <tr>
                        <td><img   src="{{asset('storage/profil_pic/'.$com->user->photo)}}" width="20px" height="20px"     alt="no photo"></td>
                        <td>{{$com->id }}</td>
                        <td>{{$com->content }}</td>
                        <td>{{$com->cov->id}}</td>
                        <td>{{$com->user->id}}</td>
                        <td>{{$com->user->name}} {{$com->user->lastname}}</td>
                        <td>{{$com->created_at}}</td>

                        <td><a class="btn btn-danger mt-2" href="{{url('deleteCom/id='.$com->id)}}">Supprimer</a></td>
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
