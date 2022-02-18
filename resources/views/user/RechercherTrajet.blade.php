@extends("include/app")
@section('content')

    <body style="background-color: white">


        @include("include.navbar")


        <!-- End Preload -->

        <!-- /header -->

        <main style="background-color: #EEEEEE">


            <!--/hero_in-->

            <div class="filters_listing sticky_horizontal mt-1">
                <div class="container">
                    <ul class="clearfix">
                        <li>
                            <div class="switch-field">
                                <label for="all"> <a href="{{ route('RechercherTrajet') }}"><input type="radio" id="all"
                                            name="listing_filter" value="all" checked data-filter="*" class="selected">
                                        Tous</a></label>
                                <label for="popular"> <a href="{{ route('RechercherTrajetN') }}"> <input type="radio"
                                            id="popular" name="listing_filter" value="popular" data-filter=".popular">
                                        Recents</a></label>

                            </div>
                        </li>
                        <li>
                            <div class="layout_view">
                                <a href="#"><i class="icon-th"></i></a>
                                <a href="#0" class="active"><i class="icon-th-list"></i></a>
                            </div>
                        </li>

                    </ul>

                </div>
                <!-- /container -->

            </div>
            <!-- /filters -->


            <div class="collapse" id="collapseMap">
                <div id="map" class="map"></div>
            </div>
            <!-- End Map -->

            <div class="row no-gutters custom-search-input inner-2 mt-0"
                style="width: 80% ; background-color:white; border:0.01px rgba(128, 128, 128, 0.171) solid;"
                id="custom-search-input">
                <div class="row no-gutters  inner-2 " id="custom-search-input">
                    <div class="col-lg-3 mx-2">
                        <div class="form-group">
                            <select class=" livesearch1 " style=" width:100%;" id="dest_dep_rech" name="dest_dep_rech">


                            </select>
                            <input type="text" style="display: none" id="dest_dep_input" name="dest_dep" hidden>

                        </div>
                    </div>
                    <div class="col-lg-3  mx-2">
                        <div class="form-group">
                            <select class=" livesearch2 " style=" width:100%;" name="dest_arrive_rech"
                                id="dest_arrive_rech" style="padding:25px !important; min-height:50px !important;">

                            </select>
                            <input type="text" style="display: none" id="dest_arrive_input" name="dest_arrive" hidden>

                            <style>




                            </style>

                        </div>
                    </div>
                    <div class="col-lg-3 mx-2">
                        <div class="form-group " style=" width:100%">
                            <input class="form-control " style="height:37px !important;" type="date"
                                placeholder="Aujourdhui">

                        </div>
                    </div>
                    <div class="col-lg-2 ">
                        <input type="submit" onclick="rechercher($('#dest_dep_input').val(),$('#dest_arrive_input').val())"
                            class="btn_search" value="Rechercher" style="height: 37px;">
                    </div>

                </div>

            </div>

            <!-- /row -->


            <div class="container margin_60_35">


                <div class="row">
                    <aside class="col-lg-3 " id="sidebar">

                        <div id="filters_col">

                            <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false"
                                aria-controls="collapseFilters" id="filters_col_bt">Filtrer par : </a>
                            <div class="collapse show" id="collapseFilters">
                                <div class="filter_type">
                                    <h6>Distriction</h6>
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck" checked>Tous
                                                <small>(945)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Non fummeur
                                                <small>(45)</small>
                                            </label>

                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Femme uniquement
                                                <small>(30)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Climatisé<small>(25)</small>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter_type mb-0 mt-0">
                                    <h6>Prix</h6>
                                    <input type="text" id="range" name="range" value="">
                                </div>

                                <div class="filter_type">
                                    <h6>Rating</h6>
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Excellent <small>(25)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Très bien <small>(26)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Bien <small>(25)</small>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--/collapse -->
                        </div>
                        <!--/filters col-->
                    </aside>
                    <!-- /aside -->




                    <div class="col-lg-9" id="list_sidebar">
                        <div class="isotope-wrapper row ">
                            @if (is_null($covs))
                                <h1>Pas de resultat</h1>

                            @endif
                            <style>
                                .box_list:hover,.no2:hover{
                                    transform: scale(1.05, 1.05);
                                    transition: 250ms;
                                    cursor: pointer;
                                }
                            </style>
                            @foreach ($covs as $cov)


                                <div class="box_list isotope-item latest col-lg-12 " >

                                    <div class="row no-gutters no2" >

                                        <div class="col-lg-12 ">
                                            <div class="wrapper">
                                                <strong style="float: right">
                                                    <p>Publié Le
                                                        {{ date('Y/j/n', strtotime($cov->created_at)) }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </p>
                                                </strong>
                                                <a href="" class="wish_bt">


                                                </a>

                                                <div class="row">
                                                    <div class="col lg" style="width:55px !important;">
                                                        <img src="storage/profil_pic/{{$cov->user->photo}}" alt=""
                                                            width="45px">
                                                    </div>
                                                    <div class="cat_star col lg-2" style="transform: translate(-70%,0)">
                                                  <a href="{{ url('ViewProfile/id=' . $cov->user->id) }}">    <strong style="float: left"> {{ $cov->user->name }}
                                                            {{ $cov->user->lastname }} </strong></a>   <br><i
                                                            class="icon_star"></i><i class="icon_star"></i><i
                                                            class="icon_star"></i><i class="icon_star"></i>
                                                    </div>

                                                    <div class="col lg-9">

                                                    </div>
                                                </div>
                                                <br>

                                                <h3> <i class="icon-location"> </i>  <a href="{{ url('RechercherTrajetPD/' . $cov->dest_deps->name) }}">
                                                        {{ $cov->dest_deps->name }}
                                                        <a> <i class="arrow_right"> </i> <a
                                                                href="{{ url('RechercherTrajetPD/' . $cov->dest_arrives->name) }}">
                                                                {{ $cov->dest_arrives->name }}
                                                                <a> <br> <small> fait le depart :
                                                                        {{ date('Y/j/n', strtotime($cov->date)) }} à
                                                                        {{ date('H:i', strtotime($cov->date)) }} </small>
                                                                    </p>
                                                </h3>
                                                <p> <strong>Passe par : @foreach ($cov->dest_passages as $dest)
                                                            <h6 style="display: inline"> <a
                                                                    href="{{ url('RechercherTrajetPD/' . $dest->name) }}">





                                                                    {{ $dest->name }}
                                                                    <a> </h6> |





                                                        @endforeach

                                                </p>




                                                <span class="price">Prix: <strong>{{ $cov->prix }} DT/ Par
                                                        personne</strong>
                                                </span>
                                            </div>
                                            <ul>

                                                <li style="float: left;"><i class="ti-eye"></i>
                                                    {{ $cov->nb_vue }} vue</li>
                                                <li>
                                                    <table style="display: inline" border="0">
                                                        <tr>
                                                            <td>
                                                <li style="float:right; padding-right:10px;">
                                                    <a class="btn_map" style="padding:10px;">Voir la map</a>
                                                </li>
                                                </td>
                                                <td>
                                                    <li>
                                                        <div class="score"><a
                                                                href="{{ url('Trajet') . '/' . $cov->id }}"><strong>Voir
                                                                    la
                                                                    trajet</strong></a></div>
                                                    </li>
                                                </td>
                                                </tr>
                                                </table>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            @endforeach


                        </div>
                        <!-- /isotope-wrapper -->



                    </div>

                    <!-- /col -->
                </div>
                <p class="text-center add_top_30"><a onclick="rechercherNext()" class="btn_1 rounded">Voir plus</a></p>

                <!-- /row -->
            </div>
            <script>
                var next = 10;

                function rechercherNext() {
                    next += 10;
                    $.ajax({
                        type: 'get',
                        url: '/RechercherTrajetNext/' + next,
                        data: {},
                        success: function(data) {
                            document.querySelector("#list_sidebar").innerHTML += data;

                        }
                    });

                }
            </script>
            <!-- /bg_color_1 -->
        </main>
        <!--/main-->


        <!--/footer-->
        </div>
        <!-- page -->

        <!-- Sign In Popup -->

        <!-- /Sign In Popup -->



        <!-- COMMON SCRIPTS -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts.js"></script>
        <script src="js/main.js"></script>
        <script src="assets/validate.js"></script>

        <!-- Map -->
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="js/markerclusterer.js"></script>
        <script src="js/map_hotels.js"></script>
        <script src="js/infobox.js"></script>
        <script src="js/rechercher.js"></script>

        <!-- Masonry Filtering -->
        <script src="js/isotope.min.js"></script>
        <script>
            $(window).load(function() {
                var $container = $('.isotope-wrapper');
                $container.isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'masonry'
                });
            });

            $('.filters_listing').on('click', 'input', 'change', function() {
                var selector = $(this).attr('data-filter');
                $('.isotope-wrapper').isotope({
                    filter: selector
                });
            });
        </script>

        <!-- Range Slider -->
        <script>
            $("#range").ionRangeSlider({
                hide_min_max: true,
                keyboard: true,
                min: 1,
                max: 180,
                from: 1,
                to: 180,
                type: 'double',
                step: 1,
                postfix: "DT ",
                grid: false
            });
        </script>




    </body>

    </html>


    <!-- /login -->

@endsection
