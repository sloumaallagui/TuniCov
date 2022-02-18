@extends("include/app")

@section("content")


<body>

	<div id="page">


	<main style="overflow-x:hidden !important ">
        @include("include.navbar")



        <section class="hero_single version_2" style="background-image: url({{asset("img/covoiturage.jpg")}}) !important;">
			<div class="wrapper">
				<div class="container">
                    <h3 style="color: rgb(134, 207, 255)">TuniCov</h3>
					<h3>Un vaste choix de trajets à petits prix</h3>
                    <h4>Rechercher votre trajet et des personnes avec qui partager un voyage</h4>
					<p></p>

					<form>
						<div class="row no-gutters custom-search-input inner-2 " style="width: 80%" id="custom-search-input">
                            <div class="row no-gutters  inner-2 " id="custom-search-input">
							<div class="col-lg-4">
								<div class="form-group">
									<select class=" livesearch1 " style=" width:100%;"   id="dest_dep_rech" name="dest_dep_rech" >


                                    </select>
                                    <input type="text"  style="display: none" id="dest_dep_rech_input" name="dest_dep"  hidden>

								</div>
							</div>
                            <div class="col-lg-3  mx-2">
								<div class="form-group">
									<select class=" livesearch1 " style=" width:100%;" name="dest_arrive_rech" id="dest_arrive_rech" style="padding:25px !important; min-height:50px !important;" >

                                    </select>
                                    <input type="text"  style="display: none" id="dest_arrive_rech_input" name="dest_arrive"  hidden >

                                    <style>




                                    </style>

								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group " style=" width:100%">
									<input class="form-control " style="height:37px !important;" type="date" placeholder="Aujourdhui">

								</div>
							</div>
                            </div>
                            <div class="row col-lg-6 center mx-auto">
                                <input type="submit" onsubmit="submitForm()" class="btn_search" value="Rechercher">
                            </div>

						</div>

						<!-- /row -->
					</form>
				</div>
			</div>
		</section>

         @auth





    @endauth
    <section class="row form-register " style="background-image: url({{asset("img/car_covoiturage.jpg")}}) ; background-size:100% 100%;" >

        <div class="row col-lg-4 p-3 m-5"  >
            <form action="{{route("ajouterCovoiturage")}}" method="get">
                @csrf
                <div class="row no-gutters " style="background-color: white; border-radius: 5px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="row-lg-2 mx-1 my-1 py-3" >

                  <h2 style="text-align: center; color:#FC5B62;">    Ajouter votre trajet </h2>

                    </div>


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
                    <div class="row-lg-2 mx-4 my-5">
                        <input type="submit" size="20"  class="btn12 btn_search btn btn-block py-4 "  style="background-color: #FF6B59 !important; color:white; width:85%"value="Ajouter mon trajet maintenant">
                    </div>
                </div>
                <!-- /row -->
            </form>



            </div>

    </div>
    </section>

		<!-- /hero_single -->





<!--/hero_in-->


<div class="container margin_80_55">
    <div class="main_title_2">
        <span><em></em></span>
        <h2>Pourquoi choisir TuniCov</h2>
        <p>ICI on partage des colocations pour éviter les arnaques et la hausse des prix.</p>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <a class="box_feat" href="#0">
                <i class="pe-7s-medal" style="color:#F75765; "></i>
                <h3>Nous sommes 100 millions de membres sur TuniCov !</h3>
                <p>Au cours des 15 dernières années, 100 millions de personnes ont rejoint la communauté TuniCov dans le monde. </p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a class="box_feat" href="#0">
                <i class="pe-7s-help2" style="color:#F75765; "></i>
                <h3>Support </h3>
                <p>Support  accessible pendant les heures de bureau (8 heures sur 5 jours) ou en dehors des heures de bureau (24h/24 pendant 5 jours, 24h/24 pendant 6 jours, 24h/24 pendant 7 jours)
                   </p>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a class="box_feat" href="#0">
                <i class="pe-7s-culture" style="color:#F75765; "></i>
                <h3>+ 575 trajets partagé</h3>
                <p>Nous sommes des millions à partager la route et à construire ensemble un réseau de transport plus intelligent, convivial et écologique pour tous..</p>
            </a>
        </div>



    </div>
    <!--/row-->
</div>
		<div class="call_section" style="background-image: url({{asset("img/covoiturage3.svg")}})">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Conducteur ou passager</h3>
							<p>profitez d’un mode de déplacement citoyen et sans engagement. Covoit’ici est :

                                Economique

                                Sûr et fiable

                                Pratique et rapide </p>
							<a href="#0" class="btn_1 rounded">S'inscrire</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Address</h4>
						<span>Taffela sousse Tunisie ,4000</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Adresse email</h4>
						<span>sloumaallagui01@gmail.com<br></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Contacts info</h4>
						<span>+ 216 54 521 131 <br> +216 51 400 497 </span>
					</li>
				</ul>
			</div>
		</div>
        <div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="row justify-content-between" id="contact">
					<div class="col-lg-5">
						<div style='background-image:url( "{{asset('img/contact.png')}} "); width:300px; heignt:400px;' >
						<img src="{{asset('img/contact.png')}}" alt="" height="360px">
                        </div>
						<!-- /map -->
					</div>
					<div class="col-lg-6">
						<h4>Envoyer nous un message</h4>
						<p>Signaler un probléme ou posez nous un question !</p>
						<div id="message-contact"></div>
						<form  autocomplete="off">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Nom complet </label>
										<input class="form-control" type="text" id="name" name="name">
									</div>
								</div>

							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" type="email" id="email" name="email">
									</div>
								</div>

							</div>
							<!-- /row -->
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="msg" name="msg" style="height:150px;"></textarea>
							</div>
							<p class="add_top_30"><input type="button" onclick="submitForm()" value="Envoyer" class="btn_1 rounded" ></p>
                            <div id="msgSubmit" class="h3 text-center hidden" style="color: rgb(247, 87, 101); " ></div>
                        </form>
                        <script>
                            function formSuccess(){
    $( "#msgSubmit" ).text("Message envoyé");

}
                            function submitForm(){
    // Initiate Variables With Form Content
                            var name = $("#name").val();
                            var email = $("#email").val();
                            var msg = $("#msg").val();
                            formSuccess();
                                $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
});

    $.ajax({
        type: "POST",
        url: "sendMessage",
        data: "name=" + name + "&email=" + email + "&msg=" + msg,
        success : function(text){

                formSuccess();
            }

    });
}
                        </script>

					</div>
				</div>
				<!-- /row -->
			</div>

		<!--/contact_info-->


	</main>
	<!-- /main -->


	<!--/footer-->
	</div>
	<!-- page -->





	<div id="toTop"></div><!-- Back to top button -->


@endsection
