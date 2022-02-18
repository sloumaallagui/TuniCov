<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tunicov - Site de covoiturage tunisien">
    <meta name="author" content="Ansonika">
    <title>Tunicov | Site de covoiturage tunisien</title>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">


    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset("img/favicon.ico")}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/style.css")}}" rel="stylesheet">
	<link href="{{asset("css/vendors.css")}}" rel="stylesheet">
    <script src="{{asset("js/jquery-2.2.4.min.js")}}"></script>






</head>


@yield("content")

@include("include.footer")
@include("include.style")
	<!-- COMMON SCRIPTS -->
    <script src="{{asset("js/jquery-2.2.4.min.js")}}"></script>
    <script src="{{asset("js/common_scripts.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
	<script src="{{asset("assets/validate.js")}}"></script>
    	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset("js/pw_strenght.js")}}"></script>



<!-- INPUT QUANTITY  -->
<script src="{{asset("js/input_qty.js")}}"></script>
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset("js/jquery.cookiebar.js")}}"></script>
	<script>
		$(document).ready(function() {
			'use strict';
			$.cookieBar({
				fixed: true
			});
		});
	</script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link href="{{asset("css/custom.css")}}" rel="stylesheet">

<script type="text/javascript">
    $('.livesearch1').select2({
        placeholder: 'Destination de départ',
        style:'padding:50px; height:150px',
        ajax: {
            url: '/Ajax-autocomplete-search',
            dataType: 'json',

            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $(".js-example-responsive").select2({
    width: 'resolve' // need to override the changed default
});
$('.DestPassage').select2({
        placeholder: 'Destination de passage',
        style:'padding:50px; height:150px',
        ajax: {
            url: '/Ajax-autocomplete-search',
            dataType: 'json',

            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

    $(".js-example-responsive").select2({
    width: 'resolve' // need to override the changed default
});

    $('.livesearch2').select2({
        placeholder: 'Destination d\'arrivage',
        maximumSelectionLength: 3,
        ajax: {
            url: '/Ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
    $.fn.select2.defaults.set('language', $.fn.select2.amd.require("select2/i18n/fr"));
    $(".js-basic-multiple").select2({
        language: "frensh"
    });
</script>
<script src="libs/select2-4.0.2-rc.1/dist/js/i18n/fr.js"></script>
<script>
var i=0;

setInterval(() => {
    dest_dep_rech= $("#select2-dest_dep_rech-container").text();
        dest_arrive_rech=$("#select2-dest_arrive_rech-container").text();
        $("#dest_dep_input").val(dest_dep_rech);
        $("#dest_arrive_input").val(dest_arrive_rech);

        dest_dep_aj= $("#select2-pac-input-container").text();
        dest_arrive_aj=$("#select2-dest_arrive_aj-container").text();
        $("#dest_dep_aj_input").val(dest_dep_aj);
        $("#dest_arrive_aj_input").val(dest_arrive_aj);
        str="";
        i=0;
        $(".select2-selection__choice").each(function() {
            i++;
              str+= "<input type='text' name='destpassage_"+i+"' value='"+$(this).attr("title")+"'>";

         });

}, 5000);
















    </script>

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhLqcQTyizpQZiXmJ4ZWis_rn-n18xTHM&callback=initAutocomplete&libraries=places&v=weekly"
      async
    ></script>
    <script src="{{asset("js/googleplaces.js")}}"></script>
</body>
</html>
