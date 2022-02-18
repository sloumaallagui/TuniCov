@extends("include/app")
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

@section("content")

<body >

<div class="p-5">
    @include("include.navbar")




<div class="container">
    <div class="main-body">


          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img  width="150px" src="{{asset('storage/profil_pic/'.$user->photo)}}" alt="{{$user->name}}" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$user->name}} {{$user->lastname}}</h4>
                      <p class="text-secondary mb-1">{{$user->description}}</p>
                      <p class="text-muted font-size-sm">{{$user->address}}</p>
                      <button class="btn btn-primary">Favorie</button>
                      <button class="btn btn-outline-primary">Message</button>

                      <p class="text-secondary mt-2 mb-1"> Rejoindre le {{$user->created_at}}</p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card mt-3 mb-2" style="border-radius: 15px;" >
                <ul class="list-group list-group-flush " style="border-radius: 15px;" >
                 <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Facebook</h6>
                    <span class="text-secondary"></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li> -->
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap" style="border-radius: 15px;" >
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" style="border-radius: 15px;"></path></svg>Facebook</h6>
                    <span class="text-secondary">{{$user->compte_fb}}</span>
                  </li>
                </ul>
              </div>
              <div  class="p-5 pb-5  border" style=" box-shadow: 2px 0px 5px 5px rgba(128, 128, 128, 0.103);border-radius: 15px; background-color: white; width:100%; min-height:400px; ">
                <form action="{{route("Review")}}" method="post">
                    @csrf
                    <input name="id" type="text" value="{{$user->id}}" hidden>
                    <h5 class="px-2" style="color:#F75968 ">Donner votre avis :</h5> <br>
                    <div class="form-group col-md-10">
                    <label class="rating-label"><strong>Note sur 5 <code></code></strong>
                        <input name="nb_star"
                            class="rating"
                            max="5"
                            oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
                            step="0.5"
                            style="--value:2.5"
                            type="range"
                            value="2.5"  >
                        </label>
                      <label>Votre avis</label>
                      <textarea name="content" id="review_text" class="form-control mb-2" style="height:130px; width:130%; resize: none;"></textarea>
                      <input type="submit"  value="Submit" class="btn_1 btn-block" id="submit-review" style="width:130%;">
                    </div>

                </form>
            </div>
            </div>
            <div class="col-md-8 ">
              <div class="card mb-3 py-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom complet</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$user->name}} {{$user->lastname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Numéro de téléphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->tel}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date de naissance :</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$user->date_naiss}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Adresse</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{$user->adresse}}
                    </div>
                  </div>


                </div>
              </div>

              <div class="row gutters-sm">
                  <style>


 #star {
     margin-left: -5px !important;
     vertical-align: bottom !important;
     opacity: 0.5
 }

 .more {
     opacity: 0.5 !important
 }



 .vl {
     margin: 8px !important;
     width: 2px;
     border-right: 1px solid #aaaaaa;
     height: 25px
 }

 #plus {
     opacity: 0.8
 }

 .card {
     border-radius: 10px !important
 }

.link:hover {
     background-color: #ccc !important
 }

 .btn-outlined:active {
     color: #FFF;
     border-color: #fff !important
 }

 img {
     cursor: pointer;
     overflow: visible
 }

 .btn:focus,
 .btn:active {
     outline: none !important;
     box-shadow: none !important
 }

 .container {
     margin-top: 20px !important
 }
                  </style>

                @foreach ( $user->reviews as $review)

                <div class="container p-0">
                    <div class="card mt-1 border-5 pt-2 active pb-0 px-0 mx-2">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-12 mb-1  row">



                                    <div class="col-2" style="width:55px !important;">
                                      <img src="../storage/profil_pic/{{$review->reviewerUser->photo}}" alt="" width="45px">
                                  </div>
                                  <div class="cat_star col-5">
                                    <strong style="float: left"> {{$review->reviewerUser->name}} {{$review->reviewerUser->lastname}} </strong> <br>
                                    @if($review->nb_star==1)
                                     <i class="icon_star"> </i>
                                    @elseif($review->nb_star==1.5)
                                    <i class="icon_star"></i><i class="icon_star-half"></i>
                                    @elseif($review->nb_star==2)
                                    <i class="icon_star"></i><i class="icon_star"></i>
                                    @elseif($review->nb_star==2.5)
                                    <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"> </i>
                                    @elseif ($review->nb_star==3)
                                    <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    @elseif ($review->nb_star==3.5)
                                    <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"> </i>
                                    @elseif ($review->nb_star==4)
                                    <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    @elseif ($review->nb_star==4.5)
                                    <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon-half-star"> </i>
                                    @elseif ($review->nb_star==5)
                                    <i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
                                    @endif
                                </div>
                                <div class="col-5">
                                  <h4 class="card-title  "><b></b></h4>
                                  {{$review->content}}  | {{$review->nb_star }}
                                </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                    </div>

                </div>
              </div>
              <style>
                .rating {
                    --dir: right;
                    --fill: gold;
                    --fillbg: rgba(100, 100, 100, 0.15);
                    --heart: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 21.328l-1.453-1.313q-2.484-2.25-3.609-3.328t-2.508-2.672-1.898-2.883-0.516-2.648q0-2.297 1.57-3.891t3.914-1.594q2.719 0 4.5 2.109 1.781-2.109 4.5-2.109 2.344 0 3.914 1.594t1.57 3.891q0 1.828-1.219 3.797t-2.648 3.422-4.664 4.359z"/></svg>');
                    --star: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 17.25l-6.188 3.75 1.641-7.031-5.438-4.734 7.172-0.609 2.813-6.609 2.813 6.609 7.172 0.609-5.438 4.734 1.641 7.031z"/></svg>');
                    --stars: 5;
                    --starsize: 3rem;
                    --symbol: var(--star);
                    --value: 1;
                    --w: calc(var(--stars) * var(--starsize));
                    --x: calc(100% * (var(--value) / var(--stars)));
                    block-size: var(--starsize);
                    inline-size: var(--w);
                    position: relative;
                    touch-action: manipulation;
                    -webkit-appearance: none;
                                }
                    [dir="rtl"] .rating {
                    --dir: left;
                    }
                    .rating::-moz-range-track {
                    background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
                    block-size: 100%;
                    mask: repeat left center/var(--starsize) var(--symbol);
                    }
                    .rating::-webkit-slider-runnable-track {
                    background: linear-gradient(to var(--dir), var(--fill) 0 var(--x), var(--fillbg) 0 var(--x));
                    block-size: 100%;
                    mask: repeat left center/var(--starsize) var(--symbol);
                    -webkit-mask: repeat left center/var(--starsize) var(--symbol);
                    }
                    .rating::-moz-range-thumb {
                    height: var(--starsize);
                    opacity: 0;
                    width: var(--starsize);
                    }
                    .rating::-webkit-slider-thumb {
                    height: var(--starsize);
                    opacity: 0;
                    width: var(--starsize);
                    -webkit-appearance: none;
                    }
                    .rating, .rating-label {
                    display: block;
                    font-family: ui-sans-serif, system-ui, sans-serif;
                    }
                    .rating-label {
                    margin-block-end: 1rem;
                    }

                    /* NO JS */
                    .rating--nojs::-moz-range-track {
                    background: var(--fillbg);
                    }
                    .rating--nojs::-moz-range-progress {
                    background: var(--fill);
                    block-size: 100%;
                    mask: repeat left center/var(--starsize) var(--star);
                    }
                    .rating--nojs::-webkit-slider-runnable-track {
                    background: var(--fillbg);
                    }
                    .rating--nojs::-webkit-slider-thumb {
                    background-color: var(--fill);
                    box-shadow: calc(0rem - var(--w)) 0 0 var(--w) var(--fill);
                    opacity: 1;
                    width: 1px;
                    }
                    [dir="rtl"] .rating--nojs::-webkit-slider-thumb {
                    box-shadow: var(--w) 0 0 var(--w) var(--fill);
                    }
                    </style>




                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    <style>
                                    body{
                                        margin-top:20px;
                                        color: #1a202c;
                                        text-align: left;
                                        background-color: #e2e8f0;
                                    }
                                    .main-body {
                                        padding: 15px;
                                    }
                                    .card {
                                        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
                                    }

                                    .card {
                                        position: relative;
                                        display: flex;
                                        flex-direction: column;
                                        min-width: 0;
                                        word-wrap: break-word;
                                        background-color: #fff;
                                        background-clip: border-box;
                                        border: 0 solid rgba(0,0,0,.125);
                                        border-radius: .25rem;
                                    }

                                    .card-body {
                                        flex: 1 1 auto;
                                        min-height: 1px;
                                        padding: 1rem;
                                    }

                                    .gutters-sm {
                                        margin-right: -8px;
                                        margin-left: -8px;
                                    }

                                    .gutters-sm>.col, .gutters-sm>[class*=col-] {
                                        padding-right: 8px;
                                        padding-left: 8px;
                                    }
                                    .mb-3, .my-3 {
                                        margin-bottom: 1rem!important;
                                    }

                                    .bg-gray-300 {
                                        background-color: #e2e8f0;
                                    }
                                    .h-100 {
                                        height: 100%!important;
                                    }
                                    .shadow-none {
                                        box-shadow: none!important;
                                    }
                                </style>
</div>

</body>
@endsection
