@extends("include/app")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

@section("content")

<body >

<div class="p-5">
    @include("include.navbar")
    <div class="container rounded bg-white mt-5 mb-5">
        <form action="{{ route('UpdateProfile') }}" method="post">
            @csrf
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{asset('storage/profil_pic/'.$user->photo)}}"> <br><span class="font-weight-bold">{{$user->name}} {{$user->lastname}}  </span> <br><span class="text-black-50">{{$user->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Paramétres de profil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nom</label><input name="nom" type="text" class="form-control" placeholder="Votre nom" value="{{$user->name}}"></div>
                        <div class="col-md-6"><label class="labels">Prenom</label><input name="prenom" type="text" class="form-control" value="{{$user->lastname}}" placeholder="Votre prénom"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Numéro de Télephone :</label><input name="tel" type="text" class="form-control" placeholder="Numero de téléphone" value="{{$user->tel}}"></div>
                        <div class="col-md-12"><label class="labels">Addressse </label><input type="text" name="adresse"; class="form-control" placeholder="Votre adresse" value="{{$user->adresse}}"></div>
                        <div class="col-md-12"><label class="labels">Description</label><input name="description" class="form-control" placeholder="description" value="{{$user->description}}"> </div>
                        <div class="col-md-12"><label class="labels">Compte Facebook</label><input name="compte_fb" type="text" class="form-control" placeholder="Compte facebook" value="{{$user->compte_fb}}"></div>
                        <div class="col-md-12"><label class="labels">Date de naissance</label><input name="date_naiss"  class="form-control" type="date" value="{{$user->date_naiss}}"></div>
                        <div class="col-md-12"><label class="labels">Email </label><input name="email" type="email" class="form-control" placeholder="Votre adresse email" value="{{$user->email}}"></div>

                    </div>

                    <div class="mt-5 text-center"> <button class="btn btn-primary profile-button" style="background-color: #FC5B62" type="submit">Sauvgardé mes paramétres </button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Crée le &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$user->created_at}}</span></div><br>

                    <div class="d-flex justify-content-between align-items-center experience"><span>Dérniére mise à jour &nbsp; {{$user->updated_at}}</span></div> <br>
                    <div class="col-md-12">Nombre  de covoiturage totale<span>&nbsp;&nbsp; {{$user->covoiturages()->count()}}</span></div> <br>
                </div>
            </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    <style>
        body {
    background: #EEEEEE
}

.form-control:focus {
    box-shadow: none;
    border-color: #6AE6ED
}

.profile-button {
    background: #FC5B62
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #FC5B62
}

.profile-button:focus {
    background: #FC5B62
    box-shadow: none
}

.profile-button:active {
    background: #FC5B62
    box-shadow: none
}

.back:hover {
    color: #6AE6ED;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #6AE6ED;
    color: #fff;
    cursor: pointer;
    border: solid 1px #6AE6ED
}
    </style>

</div>

</body>
@endsection
