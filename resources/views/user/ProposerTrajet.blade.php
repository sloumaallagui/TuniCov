@extends("include/app")
@section("content")

<body style="background-color: white">


    @include("include.navbar")


	<!-- End Preload -->
    <div class="form-register mt-5">

	<div id="login" class="p-2 mt-5 mx-auto"  style="background-color: white; border-radius: 5px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width:100%;">





        <form action="{{route("ajouterCovoiturage")}}" method="get" style="width: 450px" class="mx-auto">
            @csrf
            <div class="row mx-auto"  >
                <div class="row-lg-2  my-1 py-3" >

             <center><h2 style=" color:#FC5B62;"> Proposer votre trajet </h2></center>

                </div>

                <div style="transform: translate(9%,0)">
                <div class="row-lg-2 mx-5 my-2 py-2" >

                        <select id="pac-input" class="livesearch1   "  size="12"  id="dest_dep_aj" name="dest_dep_aj" style="border: 0 !important; width:70%; height:100px !important; padding:30px !important;"></select>
                        <input type="text"  style="display: none" name="dest_dep_ajoute" id="dest_dep_aj_input">
                    </div>
                <div class="row-lg-2 mx-5 my-2 py-2" >
                <select class="js-example-basic-multiple DestPassage " id="selectmultiple" style=" width:70%;"  name="states[]" multiple="multiple">

                  </select>


                </div>
                <div class="row-lg-2 mx-5 my-2 py-2 ">

                       <select class="livesearch2 form-control py-3 " size="17"  style=" width:70%;" id="dest_arrive_aj" name="dest_arrive_aj"    >
                       </select>
                       <input type="text" name="dest_arrive_ajoute" id="dest_arrive_aj_input"  style="display: none" >
                      <div id="outputdiv" style="display: none"></div>

                </div> <br>
                <div class="row-lg-2 mx-5 " >
                    <div class="form-group">
                 <input class="form-control " type="datetime-local" name="date"style=" color:gray;  width:70%;" >

                    </div>
                </div>
                <div class="row-lg-2 mx-5">
                    <div class="panel-dropdown" style="width:70%;">
                        <a href="#">Personnes <span class="qtyTotal">1</span></a>
                        <div class="panel-dropdown-content">
                            <!-- Quantity Buttons -->
                            <div class="qtyButtons">
                                <label>Personnes</label>
                                <input type="text" name="qtyInput" value="1">
                            </div>

                        </div>
                    </div>
                </div>
               <br>
               </div>
               <center>
                <div class="row-lg-2 mx-4 my-5">
                    <input type="submit" size="20"  class="btn12 btn_search btn btn-block py-4 "  style="background-color: #FF6B59 !important; color:white; width:85%"value="Ajouter mon trajet maintenant">
                </div></center>
            </div>
            <!-- /row -->
        </form>

			<div class="copy">© 2021 TuniCov</div>

	</div>

    </div>


	<!-- /login -->

@endsection
