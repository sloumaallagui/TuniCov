@extends("include/app")
@section("content")

<body>


    @include("include.navbar")


	<!-- End Preload -->

        <!-- /header -->

        <main style="padding-top:100px; background-color: #EEEEEE">
            @if(empty($covs) or count($covs)==0)
            <div style="width: 100%;  background-color: white; height: 300px;">
           <center>   <h3 class="pt-5">Vous n'avez pas des trajet pour le moments</h3> </center>
         </div>
            @endif
            @if ($covs->count()>0)
<h4 class="m-5" style=" font-size:17;  display:inline; color:#43E1EA"  ><strong>Liste des trajet publié :</strong></h4>
<h6 style="float: right; margin:10px; margin-right:40px; color:rgb(94, 93, 93);"> Covoiturage


    {{(integer)$covs->count("id")}} &nbsp;| &nbsp; Nombre de vue moyenne {{(integer)$covs->avg("nb_vue")}} &nbsp;| &nbsp;  Nombre de vue total :{{$covs->sum("nb_vue")}} &nbsp;| &nbsp; <strong> Derniere modification :{{$covs->first()->updated_at}} </strong></h6> <br>
     @endif
 <br>

<center>

<div class="isotope-wrapper row  " style="width: 80%; transform:translate(7%,0)" >

@if ($covs->count()>0)




    @foreach ($covs as $cov)





        <div class="box_list isotope-item latest col-xl-5 col-lg-6 col-md-6  " style="max-height:30px !important; border-radius: 15px;">

                   <div class="row " style="max-height:30px !important;">

                       <div class="col-lg-12 " style="max-height:30px !important;">
                           <div class="wrapper" style="max-height:30px !important;">
                            <p style="float: left;"><i class="ti-eye"></i> {{$cov->nb_vue}} vue</p>
                               <a  style="float: right">
                                Publié le {{$cov->created_at}}
                               </a> <center style="margin-top:20px;">
                                <br><br>
                               <h3><a href="hotel-detail.html">

                                   {{
                                       $cov->dest_deps->name
                                   }} <a> à <a href="hotel-detail.html">
                                   {{
                                       $cov->dest_arrives->name
                                   }} <a> </h3>
                                <table border="0"> <tr> <td>Passe par : </td>  <p style="text-align: left; ">  @foreach ( $cov->dest_passages as $dest ) <td>
                                    <a style="display: inline" href="hotel-detail.html">  <h6 style="display: inline;">
                                           {{
                                               $dest->name
                                           }}  </h6><a>
                                             </td> </p>
                                     @endforeach</tr>
                                  </table></center>
                                  <span class="price">Prix : <strong>{{$cov->prix}} DT/ Par personne</strong> </span>
                           </div>
                           <ul style="max-height:10px !important; " >
                            <div style="transform:translate(-10%,0)">

                                <center style=" display:inline; ">
                               <li style="float: right;" ><div class="score" ><a style=" background-color: #43E1EA !important;" href="{{url('Trajet')."/".$cov->id}}"><strong style=" background-color: #43E1EA!important;">Partager</strong></a></div></li> &nbsp;
                               <li style="float: right;" ><div class="score" ><a style=" background-color: #43E1EA!important; margin-left-right:10px" href="{{url('Trajet')."/".$cov->id}}"><strong style=" background-color: #43E1EA !important;">Supprimer</strong></a></div></li> </center>
                               <li style="float: right;"><div class="score"><a href="{{url('Trajet')."/".$cov->id}}"><strong>Voir la trajet</strong></a></div></li>
                            </div>     </ul>

                       </div>
                   </div>
               </div>
               @endforeach
               @endif









</div>
</center>
            </main>

@endsection

