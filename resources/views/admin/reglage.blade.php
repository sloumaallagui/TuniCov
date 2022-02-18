
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
<center>
<strong>login : </strong>{{$admin->login }} <br>
<strong>type:</strong>
@if ($admin->type==1)
 Vous etes un <strong> Administrateur principal </strong> <br> Vous pouvez ajouter /supprimer de administrateur
@endif
@if ($admin->type==2)
 Vous etes un <strong> Administrateur editeur  </strong>  <br> Vous pouvez uniquement modifier la base de données
@endif
</center>
@if ($admin->type==1)
<div class="card border" style="border:0.001 px rgba(128, 128, 128, 0.473); border-radius: 3px;" >
    <div class="card-body">
      <h1 class="card-title">Ajouter un administrateur</h1>

 <form action="{{Route('createAdmin')}}" method="post">
@csrf
<div class="form-group">
    <label for="email"> login:</label>
    <input type="text" class="form-control" id="email" name="login">
  </div>
  <div class="form-group">
    <label for="email">Mot de passe:</label>
    <input type="text" class="form-control" id="email" name="password">
  </div>
  <div class="form-group">
  <select name="type" id="">
      <option value="1">Administrateur</option>
      <option value="2">Editeur</option>
  </select>
  </div>  <br>
  <div class="form-group">
    <input class="btn btn-success btn-block" type="submit" value="Ajouter un administrateur">
  </div>
</div>
</div>

 </form>
 <div class="panel panel-default" style="margin-top:50px" >
    <div class="panel-heading">
        Statistique totale
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr> <strong>
                        <th>Login</th>
                        <th>Type </th>
                        <th>Operation </th> </strong>
                    </tr>
                </thead>
                <tbody>


                    @foreach ( $admins as $adminli )
                    <tr>
                        <td>{{$adminli->login}}</td>
                        <td>@if ($adminli->type==1)
                            Administrateur
                        @else
                            Editeur
                            @endif
                    </td>
                        <td><a class="btn btn-block btn-primary" href="{{url('deleteAdmin\id='.$admin->id)}}" >Supprimer</a></td>

                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endif

@endsection
</body>
</html>
