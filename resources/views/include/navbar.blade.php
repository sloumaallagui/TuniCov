@auth


        <header class="header menu_fixed" style="background-color: white !important; color:black;">
            @endauth
        @guest

      <style> body{
            margin-top:20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }
    </style>
		<header class="header menu_fixed " style="background-color: white">
            @endguest
            <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
            <div id="logo"  style="color:white" >
                <a href="{{route("/")}}" >
                    <img src="{{asset('img/logo.png')}}"   width="60" height="40" data-retina="true" alt="" class="logo_normal">
                    <img src="{{asset('img/logo_sticky.png')}}"  width="60" height="40" data-retina="true" alt="" class="logo_sticky">
            </a>
            </div>
            <ul id="top_menu">
                @auth
                <li><a href="wishlist.html"  title="Your wishlist"><img src="{{ asset("img/heart.png") }}" style="width: 25px; height:25px; transform: translate(0,30%)"  alt=""></a></li>
                <li>
                    <div class="dropdown dropdown-user">
                        <a href="#0" class="logged" data-toggle="dropdown p-3 m-5" title="Logged">
                            <img   src="{{asset('storage/profil_pic/'.$user->photo)}}"     alt="no photo"></a>
                        <div class="dropdown-menu px-1 ">
                            <ul>

                                <li><a href="{{route('Profil')}}">Profile</a></li>
                                <li><a href="{{route('Parametres')}}">Parametres de compte</a></li>
                                <li><a href=" {{ route('logout')}} ">Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>

                </li>

                @endauth
               @guest
               <li><a href="{{route("login") }}"  ><img  src="{{asset("img/login.png")}}" alt="login"></a></li>
              @endguest
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>

                    <li>
                        <a href="{{ route("ProposerTrajet")}}" class="btn_1 rounded"
                            @auth
                                style="color: white"
                            @endauth
                        >Proposer un trajet</a>
                    </li>

                    <li><span><a
                                style="color: black"
                            href="{{route("RechercherTrajet")}}"> <strong>Rechercher un trajets</strong> </a></span>

                    </li>
                 @auth <li><span><a
                        style="color: black"
                    href="{{route("MesTrajets")}}"> <strong> Mes trajets</strong></a></span>
                              @endauth

            </li>

                @guest

                  <li><span><a href="#0"  style="color: black">Contactez-nous</a></span>

                    </li>
                    <li><span><a href="#0"  style="color: black">A&nbsp;propos </a></span>

                    </li>

                    @endguest

                </ul>
            </nav>
        </header>
	<!-- /header -->
