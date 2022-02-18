@extends("include/app")
@section("content")

<body style="background-color:white">


    @include("include.navbar")


	<!-- End Preload -->
    <div class="form-register mt-5">

	<div id="login" class="p-2 mt-5 mx-auto" style="width: 280px">
        <br> <br>

        <h6>Quelque informations additionel</h6></h5>
        <hr>

			<form autocomplete="off" action="{{route("EnregistrerTrajet")}}" method="post">
                @csrf
                <h5>Trajet de  <span style="color:#FD8A8E">{{$dest_dep}} </span> à <span style="color:#FD8A8E">{{ $dest_arrive}} </span></h5>

                <input type="text" value="{{$cov_id}}" name="cov_id" hidden style="display: none">
				<div class="form-group">
					<label>Description</label>
                    <textarea class="form-control"  name="description" id="" cols="30" rows="3" style="resize: none"></textarea>

				</div>
				<div class="form-group">
					<label>Prix en DT</label>
					<input class="form-control" type="number" name="prix" placeholder="Ex: 12">

				</div>
				<div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="femme_uniq[]" value="true">
                    <label class="form-check-label" for="exampleCheck1">Femme uniquement</label>
                </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="non_fummeur[]" value="true">
                    <label class="form-check-label" for="exampleCheck1">Non fummeur</label>
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="climatise[]" value="true">
                    <label class="form-check-label" for="exampleCheck1">Climatisé</label>
                    </div>


			<button type="submit" class="btn_1 rounded full-width add_top_30"> Enregistrer mon trajet </button>
            </div>
			</form>


	</div>
    </div>


	<!-- /login -->

@endsection
