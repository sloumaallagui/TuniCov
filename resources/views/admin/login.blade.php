<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav" style="background-color: #92343d;">
         <div class="login-main-text">
            <img src="{{asset('img/logo.png')}}"  width="200" height="120" data-retina="true" alt="" class="logo_normal">
            <h2>TuniCov<br> Espace Admin</h2>
            <p>Espace administrateur TuniCov ,Autorités administratives interdit aux publics  </p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="{{route("adminlogin")}}">
                @csrf
                  <div class="form-group">
                     <label  style="color:#F55D6B ">Nom de l'administrateur</label>
                     <input type="text" class="form-control" placeholder="Non de l'admin" name="login">
                  </div>
                  <div class="form-group">
                     <label  style="color:#F55D6B ">Mot de passe</label>
                     <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                  </div>
                  <input type="submit" class="btn " style="background-color: #F55D6B; color:white" value="se connecter">

               </form>
            </div>
         </div>
      </div>
<style>
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;

}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%;
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}

</style>
