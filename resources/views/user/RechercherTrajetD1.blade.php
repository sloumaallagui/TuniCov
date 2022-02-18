<div class="isotope-wrapper row ">



@foreach ($covs as $cov)





<div class="box_list isotope-item latest col-lg-11 ">

    <div class="row no-gutters">

        <div class="col-lg-12 ">
            <div class="wrapper">
                <strong style="float: right"> <p>Publié Le {{date('Y/j/n', strtotime($cov->created_at));}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </p></strong>
                <a href="" class="wish_bt">


                </a>

                <div class="row">
                <div class="col lg-0" style="width:55px !important;">
                <img src="storage/profil_pic/{{$cov->user->photo}}" alt="" width="45px" >
            </div>
                <div class="cat_star col lg-2" style="transform: translate(-70%,0)" >
                    <a href="{{ url('ViewProfile/id=' . $cov->user->id) }}">    <strong style="float: left"> {{ $cov->user->name }}
                        {{ $cov->user->lastname }} </strong></a>  <br><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>

                <div class="col lg-9">

                </div>
            </div>
            <br>

                <h3><a href="hotel-detail.html">
                    {{
                        $cov->dest_deps->name
                    }} <a> à <a href="hotel-detail.html">
                    {{
                        $cov->dest_arrives->name
                    }} <a> <br> <small> fait le depart :  {{date('Y/j/n', strtotime($cov->date));}} à {{ date('H:i', strtotime($cov->date));}} </small></p></h3>
                    <p> <strong>Passe par :  @foreach ( $cov->dest_passages as $dest )
                        <h6 style="display: inline">  <a href="hotel-detail.html">

                            @if (!$dest)



                            {{
                                $dest->name
                            }} <a> </h6> |
                            @else

                            {{
                                $dest->name
                            }} <a> </h6>

                            @endif
                      @endforeach <strong>
                    </p>




                <span class="price">Prix: <strong>{{$cov->prix}} DT/ Par personne</strong> </span>
            </div>
            <ul>

                <li style="float: left;"><i class="ti-eye"></i> {{$cov->nb_vue}} vue</li>
           <li> <table style="display: inline" border="0"> <tr> <td> <li style="float:right; padding-right:10px;">
                    <a class="btn_map" style="padding:10px;" >Voir la map</a>
                </li></td>  <td>
                <li><div class="score"><a href="{{url('Trajet')."/".$cov->id}}"><strong>Voir la trajet</strong></a></div></li> </td>
            </tr>    </table> </li>
            </ul>
        </div>
    </div>

</div>
           @endforeach

           <!-- /box_list -->

           <!-- /box_list -->


           <!-- /box_list -->

           <!-- /box_list -->
           </div>
