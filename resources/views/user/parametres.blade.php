@extends("include/app")
@section("content")

<body>


    @include("include.navbar")


	<!-- End Preload -->

        <!-- /header -->

        <main style="padding-top:100px; background-color: #e7e7e79a">



                <div class="container ">
                    <div class="row">
                        <aside class="col-lg-3" id="sidebar">
                                <div class="box_style_cat" id="faq_box">
                                    <ul id="cat_nav">
                                        <li><a href="#payment" class="active"><i class="icon-user-1"></i>Parametres de profil</a></li>
                                        <li><a href="#tips"><i class="icon-credit-card"></i>Methodes de Payments</a></li>
                                        <li><a href="#reccomendations"><i class=" icon-block-4"></i>Bloquage</a></li>
                                        <li><a href="#terms"><i class="icon-lock-open-alt"></i>Mot de passe et Sécurite</a></li>
                                        <li><a href="#booking"><i class=" icon-trash-7"></i>Désactivé ou supprimer Votre compte</a></li>
                                    </ul>
                                </div>
                                <!--/sticky -->
                        </aside>
                        <!--/aside -->

                        <div class="col-lg-9" id="faq">
                            <h4 class="nomargin_top">Parametres de profil</h4>
                            <div role="tablist" class="add_bottom_45 accordion_2" id="payment">
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i>Parametres de profil</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
                                        <div class="card-body">
                                            <p>Consulter et modifier votre profil Currents. Votre profil Currents inclut les informations de votre profile tel que nom prenom, numéro de téléphone , etc
                                                <br><a href="{{route('Profil')}}" class="text text-primary"> Modifier mon profil</a></p>

                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Amies et favories
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree_payment" class="collapse" role="tabpanel" data-parent="#payment">
                                        <div class="card-body">

                                            <p>En cours de construction</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                            </div>
                            <!-- /accordion payment -->

                            <h4 class="nomargin_top">Methodes de payments</h4>
                            <div role="tablist" class="add_bottom_45 accordion_2" id="tips">
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true"><i class="indicator ti-plus"></i>Mes methodes de payments</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
                                        <div class="card-body">

                                            <p>En cours de construction</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo_tips" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Mon budget
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo_tips" class="collapse" role="tabpanel" data-parent="#tips">
                                        <div class="card-body">
                                            <p>En cours de construction</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree_tips" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Ajouter une methode de payment
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree_tips" class="collapse" role="tabpanel" data-parent="#tips">
                                        <div class="card-body">
                                            <p>En cours de construction</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                            </div>
                            <!-- /accordion suggestions -->

                            <h4 class="nomargin_top">Reccomendations</h4>
                            <div role="tablist" class="add_bottom_45 accordion_2" id="reccomendations">
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne_reccomendations" aria-expanded="true"><i class="indicator ti-plus"></i>Introdocution</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo_reccomendations" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Generative Modeling Review
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree_reccomendations" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Variational Autoencoders
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree_reccomendations" class="collapse" role="tabpanel" data-parent="#reccomendations">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                            </div>
                            <!-- /accordion Reccomendations -->

                            <h4 class="nomargin_top">Terms&amp;conditons</h4>
                            <div role="tablist" class="add_bottom_45 accordion_2" id="terms">
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne_terms" aria-expanded="true"><i class="indicator ti-plus"></i>Introdocution</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne_terms" class="collapse" role="tabpanel" data-parent="#terms">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo_terms" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Generative Modeling Review
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo_terms" class="collapse" role="tabpanel" data-parent="#terms">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree_terms" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Variational Autoencoders
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree_terms" class="collapse" role="tabpanel" data-parent="#terms">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                            </div>
                            <!-- /accordion Terms -->

                            <h4 class="nomargin_top">Booking</h4>
                            <div role="tablist" class="add_bottom_45 accordion_2" id="booking">
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne_booking" aria-expanded="true"><i class="indicator ti-plus"></i>Introdocution</a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne_booking" class="collapse" role="tabpanel" data-parent="#booking">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo_booking" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Generative Modeling Review
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo_booking" class="collapse" role="tabpanel" data-parent="#booking">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                                <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree_booking" aria-expanded="false">
                                                <i class="indicator ti-plus"></i>Variational Autoencoders
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree_booking" class="collapse" role="tabpanel" data-parent="#booking">
                                        <div class="card-body">
                                            <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                            </div>
                            <!-- /accordion Booking -->
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!--/container-->

            <!--/main-->

        </main>
@endsection
