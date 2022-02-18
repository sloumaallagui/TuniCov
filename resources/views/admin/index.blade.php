
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
<div class="col-md-12 ">
    <div class="panel panel-default mt-5" style="margin-top:100px">
      <div class="panel-heading">
         Statistique totale
      </div>
      <div class="panel-body">
          <div class="row">
              <div class="col-md-3 ">
    <div class="alert alert-info text-center">
        <img src="{{asset('admin/img/cars.png')}}" width="130" height="100" alt="">
          <h3>{{$covs->count()}} </h3>
          Covoiturage Publié
      </div>
  </div>
<div class="col-md-3 ">
    <div class="alert alert-success text-center">
        <img src="{{asset('admin/img/users.png')}}" width="120" height="100" alt="">
          <h3>{{$users->count()}} </h3>
          Utilisateur enregistré
      </div>
  </div>
<div class="col-md-3 ">
    <div class="alert alert-warning text-center">
        <img src="{{asset('admin/img/rating.png')}}" width="100" height="100" alt="">
          <h3>{{$revs->count()}}</h3>
            Avis client
      </div>
  </div>
<div class="col-md-3 ">
    <div class="alert alert-danger text-center">
        <img src="{{asset('admin/img/questions.png')}}" width="100" height="100" alt="">
          <h3>{{$coms->count()}} </h3>
          Questions /Repances
      </div>
  </div>
          </div>
          </div>
      </div>
      </div>
@endsection
</body>
</html>
