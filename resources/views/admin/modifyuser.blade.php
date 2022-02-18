
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

<form action="{{route('modifyUser')}}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" id="email" name="id" value="{{$user->id}}" style="display: none">
        <label for="email">Nom:</label>
        <input type="text" class="form-control" id="email" name="name" value="{{$user->name}}">
      </div>
      <div class="form-group">
        <label for="email">Prenom:</label>
        <input type="text" class="form-control" id="email" name="lastname" value="{{$user->lastname}}">
      </div>
      <div class="form-group">
        <label for="email">Adresse:</label>
        <input type="text" class="form-control" id="email" name="adresse" value="{{$user->adresse}}">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
      </div>
      <div class="form-group">
        <label for="email">Tel:</label>
        <input  type="text" class="form-control" id="email" name="tel"  value="{{$user->tel}}">
      </div>
      <div class="form-group">
        <label for="email">Description:</label>
        <input  type="text" class="form-control" id="email" name="description" value="{{$user->description}}">
      </div>
      <div class="form-group">
        <label for="email">Date de naissance:</label>
        <input type="date" class="form-control" id="email" name="date_naiss" value="{{$user->date_naiss}}">
      </div>
      <div class="form-group">

        <input type="submit" class="btn btn-primary" value="sauvgarder"> &nbsp;
        <input type="reset" value="Annuler">
      </div>
</form>
@endsection
</body>
</html>
