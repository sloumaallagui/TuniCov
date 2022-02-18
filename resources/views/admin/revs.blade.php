
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
                        <th>Nombre totale des avis clients </th>
                        <th>Avis  moyenne </th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <td>{{$revs->count()}}</td>
                        <td>{{$revs->pluck('nb_star')->avg()}}</td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="panel panel-default" style="margin-top:100px">
    <div class="panel-heading">
        Liste des avis client publié
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Nombre de star</th>
                        <th>Avis au client</th>
                        <th>Avis du client</th>
                        <th>Contenu</th>
                        <th>Date de creation</th>
                        <th>Opération</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($revs as $rev )


                    <tr>

                        <td>{{$rev->id}}</td>
                        <td>{{$rev->nb_star}}</td>
                        <td>{{$rev->reviewedUser->id }} | {{$rev->reviewedUser->name }} {{$rev->reviewedUser->lastname }}</td>
                        <td>{{$rev->reviewerUser->id }} | {{$rev->reviewerUser->name }} {{$rev->reviewerUser->lastname }}</td>
                        <td>{{$rev->content}}</td>
                        <td>{{$rev->created_at}}</td>

                        <td><a class="btn btn-danger mt-2" href="{{url('deleteRev/id='.$rev->id)}}">Supprimer</a></td>
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
