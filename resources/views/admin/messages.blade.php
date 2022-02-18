
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
                        <th>Nombre totale des messages récus </th>

                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <td>{{$messages->count()}}</td>

                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="panel panel-default" style="margin-top:100px">
    <div class="panel-heading">
        Liste des messages récus
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>Nom et prenom</th>
                        <th>Email</th>
                        <th>Contenu</th>
                        <th>Récus le</th>
                        <th>Operation</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message )


                    <tr>

                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->msg}}</td>
                        <td>{{$message->created_at}}</td>

                        <td><a class="btn btn-danger mt-2" href="{{url('deleteMessage/id='.$message->id)}}">Supprimer</a></td>
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
