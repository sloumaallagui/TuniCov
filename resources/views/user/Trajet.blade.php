@extends("include/app")
@section("content")

<body>
    @include("include.navbar")

    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#reviews">Questions</a></li>
                    <li><a href="#sidebar">Demender le Trajet</a></li>
                </ul>
            </div>
        </nav>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <section id="description">

                        <input type="text" style="display: none" value="{{$cov->id}}" name="covid">

                        <!-- /row -->
                        <br> <br>
                        <h3 style="display: inline-block">  <i class="icon-location"> </i> Trajet de <a href="{{ url('RechercherTrajetPD/' . $cov->dest_deps->name) }}">
                            {{ $cov->dest_deps->name }}
                            <a><i class="arrow_right"></i> <a href="{{ url('RechercherTrajetPD/' . $cov->dest_deps->name) }}">
                                {{ $cov->dest_arrives->name }}
                                <a></h3>
                        <div class="row" style="display: inline-flex; float:right">
                           <a href="" style="display: inline-flex"><div class="col lg" style="width:55px !important; ">
                                <img src="../storage/profil_pic/{{$cov->user->photo}}" alt=""
                                    width="45px" style="clip-path:ellipse(50% 50%);">
                            </div>
                            <div class="cat_star col lg-2" style="transform:translate(-50%,0)" >
                                <a href="{{ url('ViewProfile/id=' . $cov->user->id) }}">    <strong style="float: left"> {{ $cov->user->name }}
                                    {{ $cov->user->lastname }} </strong></a>  <br><i
                                    class="icon_star"></i><i class="icon_star"></i><i
                                    class="icon_star"></i><i class="icon_star"></i>
                            </div> </a>

                            <div class="col lg-9">

                            </div>
                        </div>
                        <div id="instagram-feed-hotel" class="clearfix"></div>
                        <hr>
                        <div class="room_type first">
                            <div class="row">

                                <div class="col-md-12">
                                    <h4>Description :</h4>
                                    <p>{{$cov->description}}</p>
                                    <ul class="hotel_facilities" style="display: inline-flex">
                                        @if ($cov->non_fummeur)
                                        <li> <i class="icon_blocked"></i> Pour les Non fummeur uniquement</li>
                                        @endif
                                        @if ($cov->femme_uniq)
                                        <li> <i class=" icon-user-woman"></i> Femme uniquement</li>
                                        @endif
                                        @if ($cov->climatise)
                                        <li> <i class="icon-temperatire"></i> Voiture climatisé</li>
                                        @endif


                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                        </div>




                    </section>
                    <!-- /section -->



                    <section id="reviews">
                        <h3>Questions</h3>

                        <form action="{{route('Questions')}}" method="post">
                            @csrf
                            <input type="text" name="cov_id" hidden value="{{$cov->id}}">
                        <div class="d-flex flex-row add-comment-section mt-4 mb-4"><img class="img-fluid img-responsive rounded-circle mr-2" src="../storage/profil_pic/{{$user->photo}}" width="45"><input type="text" class="form-control mr-3 p-4"  name="content" placeholder="Votre question exp: Est-ce que je peux amener mes enfants ?" id="comm">
                            @if ($cov->user->id==$user->id)
                            <button class="btn " style="background-color: #4DE2EC; color:white;" type="submit">Répondre</button>
                            @else
                            <button class="btn " style="background-color: #4DE2EC; color:white;" type="submit">Poser</button>
                            @endif
                            </div>
                    </form>


                    <style>
                                                .card {
                            border: solid 0.001px #c9cccc93;
                          /*  box-shadow: 2px 3px 3px 2px #e9ecef; */
                            border-radius: 4px
                        }

                        .dots {
                            height: 4px;
                            width: 4px;
                            margin-bottom: 2px;
                            background-color: #bbb;
                            border-radius: 50%;
                            display: inline-block
                        }

                        .badge {
                            padding: 7px;
                            padding-right: 9px;
                            padding-left: 16px;
                           /* box-shadow: 2px 3px 3px 2px #e9ecef */
                        }

                        .user-img {
                            margin-top: 4px
                        }*
                        .reply:hover{
                            cursor: pointer;
                            text-decoration: underline;
                        }

                    </style>

                    </section>
                    <section>

                        @foreach ( $questions as $question)
                        @if ($cov->user->id!=$question->user->id)
                        <div class="card p-3">
                        @else
                        <div class="card p-3 ml-5">
                        @endif
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img src="../storage/profil_pic/{{$question->user->photo}}" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary name" style="color:#F65966 !important;">{{$question->user->name}} {{$question->user->lastname}}</small> <br>
                                 <small class="font-weight-bold m-3">{{$question->content}}</small></span> </div>  <small>
                                    @if ($cov->user->id==$question->user->id)
                                    <span style="padding: 5px; background-color:#F65966; color:white; border-radius: 5px; font-weight: solid;"> Répanse </span>
                                    @else
                                    <span style="padding: 5px; background-color:#4DE2EC; color:white; border-radius: 5px; font-weight: solid;"> Question </span>
                                    @endif
                                 &nbsp;&nbsp;  {{$question->created_at->format('d M Y ')}}</small>
                        </div>
                        <div class="action d-flex justify-content-between mt-2 align-items-center">
                            <div class="reply px-4">  <a class="reply1" alt="{{$question->user->name}}_{{$question->user->lastname}}">Répondre</a> </div>
                            <div class="icons align-items-center"> <i class="fa fa-star text-warning"></i> <i class="fa fa-check-circle-o check-icon"></i> </div>
                        </div>
                    </div>

                    @endforeach
                    </section>


                </div>
                <style>
                    input[value="@"] {color:red;}
                </style>
                <script>
                    $(".reply1").click(function(){


                        $("#comm").val("@"+$(this).attr("alt")+" ");
                        $("#comm").focus();
                    })
                </script>
                <!-- /col -->
                @if($cov->user->id==$user->id)
                <aside class="col-lg-4" id="sidebar" style="min-width: 350px; ">
                    <div class="box_detail booking" style="min-width:400px; ">
                    @if($cov->userReq->count()==0)
                    <h6 style="text-align: center">Il n'y a pas des demandes pour le moment</h6>
                    @endif
                    @if($cov->userReq->count()>=1)
                    <table class="table">
                        <thead>
                          <tr>
                            <td>Nom </td>
                            <td>Place</td>
                            <td>Nombre</td>
                            <td>Operation</td>
                          </tr>
                        </thead>
                        <tbody>

                       @foreach($cov->userReq as $req )
                       <tr>
                        <td>{{$req->user->name}} {{$req->user->lastname}} </td>
                        <td>{{$req->place}}</td>
                        <td>{{$req->qty}}</td>
                        @if($req->status==0)
                        <td class="flexbox"><a class="btn btn-success mb-1" href="{{url('descision/id='.$req->id.'/status=1/covid='.$cov->id)}}">Accepter</a> <br>  <a   class="btn btn-danger" href="{{url('descision/id='.$req->id.'/status=2/covid='.$cov->id)}}">Réfuser</a></td>
                        @elseif($req->status==1)
                        <td>Accepté</td>
                        @elseif($req->status==2)
                        <td>Refusé</td>
                        @endif
                    </tr>
                      @endforeach
                        </tbody>
                    </table>
                    </div>
                    </aside>
                    @endif

                @endif
                @if($cov->user->id!=$user->id)
                <aside class="col-lg-4" id="sidebar">
                    <div class="box_detail booking">
                        <div class="price">
                            <span>{{$cov->prix}}DT <small>par personne</small></span>

                            <div class="score"><span> Publié le {{ $cov->created_at->format('d M Y ')}}</span></div>
                        </div>

                        @if (!is_null($req))
                        <div class="form-group" disabled>
                            <input class="form-control" type="text" name="place" placeholder="{{$req->place}}" id="place" disabled  >
                        </div>

                        <div class="panel-dropdown" >
                            <a href="#" >Nombre de places <span class="qtyTotal" >{{$req->qty}}</span></a>
                            <div class="panel-dropdown-content right" style="display:none">
                                <div class="qtyButtons"  >
                                    <label >Persoone</label>
                                    <input type="text" name="qtyInput" value="{{$req->qty}}"  min="1" disabled id="qty" >
                                </div>

                            </div>
                        </div>
                        <a  class=" add_top_30 btn_1 full-width purchase" id="demander">Annuler la demande</a>
                        @else
                        <div class="form-group" style="overflow: hidden">

                            <input  class="form-control" type="text" name="place" placeholder="ou exactement ?"  id="place" >

                        </div>

                        <div class="panel-dropdown">
                            <a href="#">Nombre de places <span class="qtyTotal">1</span></a>
                            <div class="panel-dropdown-content right">
                                <div class="qtyButtons">
                                    <label>Persoone</label>
                                    <input type="text" name="qtyInput" value="1"  min="1"  id="qty">
                                </div>

                            </div>
                        </div>

                        <a  class="add_top_30 btn_1 full-width purchase"  id="demander">Demander le trajet</a>

                        @endif

                        <style>
                            .add_top_30{
                            background-color: white !important;
                            border:2px solid #F65966 !important;
                            color:#F65966 !important; }
                            .add_top_30_2{
                            background-color: #F65966 !important;
                            border:2px solid #F65966 !important;
                            color:white!important; }
                       </style>

                        <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Enregistrer dans favories</a>
                        <div class="text-center"><small></small></div>
                    </div>
                    <ul class="share-buttons">
                        <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Partager</a></li>
                        <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                        <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                    </ul>
                </aside>
                @endif
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <style>
        #demander:hover{
            background-color:#32A067;
        }
    </style>
    <script>
        console.log("click");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#demander").click(function(e){
            e.preventDefault();
           if( $("#place").attr('disabled')=='disabled'){
            $("#place").attr("disabled",false);
            console.log($("#place").attr('disabled'));
           }
           if( $("#qty").attr('disabled')=='disabled'){
            $("#place").attr("enabled",false);
           }
           $(".panel-dropdown-content").css("display","block");
            var qty= $("input[name=qtyInput]").val();
            var place  = $("input[name=place]").val();
            var covid= $("input[name=covid]").val();

            $.ajax({
               type:'get',
               url:'/ReqCovoiturage',
               data:{qty:qty, place:place,covid:covid},
               success:function(data){
                   console.log(data);
                if(data.qty!="500"){
                    $("#place").attr("disabled",true);
                    $("#qty").attr("disabled",true);
                    $(".panel-dropdown-content").css("display","none");
                $("#demander").text("Annuler la demande");

                $("#demander").attr("style")=" background-color:#29DCE6 !important;";
                }
                else{
                    $("#place").val("");
                    $("#qty").val("1");
                    $(".qtyTotal").text("1");
                 $("#demander").text("Demander le trajet");

                $("#demander").css(" background-color:#32A067 !important;");
                }

               }
            });
        });

    </script>
    @endsection
</body>


