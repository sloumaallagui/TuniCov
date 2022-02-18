<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('admin/css/font-awesome.css')}}" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('admin/css/basic.css')}}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" >
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0 ;  background-color: #F55D6B; ">
            <div class="navbar-header clearfix">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html"><img src="{{asset('img/logo.png')}}" style="transform: translate(-30%,-20%)" width="60" height="40" data-retina="true" alt="" class="logo_normal">TuniCov</a>
            </div>

            <div class="header-right">


                <a href="{{route("adminlogout")}}" class="btn text-white" style="background-color: #4380B8; color:white;"title="Logout">Log out</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation" style="height: 500px !important;">
            <div class="sidebar-collapse">
                <ul class="nav " id="main-menu">
                    <li c>
                        <div class="user-img-div">
                            <center><img src="{{asset('admin/img/user.png')}}" class="img-thumbnail" /></center>

                            <div class="inner-text " >
                               <center> {{$admin->login}}</center>
                            <br />
                              <center>  <small>Derniére date de connexion : <br> {{$admin->updated_at}} </small></center>
                            </div>
                        </div>

                    </li>


                    <li style="background-color: #F55D6B;">
                        <a  href="{{route("indexadmin")}}" style="background-color: #F55D6B; !important">Accueil</a>
                    </li>
                    <li>
                        <a  href="{{route("users")}}" >Liste des utilisateurs</a>
                    </li>
                    <li>
                        <a  href="{{route("covs")}}" >Covoiturage</a>
                    </li>
                    <li>
                        <a  href="{{route("revs")}}" >Avis clients</a>
                    </li>
                    <li>
                        <a  href="{{route("coms")}}" >Questions / Repenses</a>
                    </li>
                    <li>
                        <a  href="{{route("messages")}}" >Messages</a>
                    </li>
                    <li>
                        <a  href="{{route("reglage")}}" >Partametres d'administration</a>
                    </li>








                        </ul>



                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">

@yield('content')
                <!-- /. ROW  -->

                <!-- /. ROW  -->


                <!-- /. ROW  -->









                <!--/.Row-->
                <hr />








        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('admin/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('admin/js/bootstrap.js')}}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('admin/js/jquery.metisMenu.js')}}"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('admin/js/custom.js')}}"></script>



</body>
</html>
