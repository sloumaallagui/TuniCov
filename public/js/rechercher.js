var d=new Date();
var y=d.getFullYear();
var m=d.getMonth();
var day=d.getDate();
var next=10;

function rechercher(dep,arrive,date=y+"/"+m+"/"+day){
    alert("usage rechercher"+dep+" "+arrive+" "+date);
    $.ajax({
        type:'get',
        url:'/RechercherTrajetD1/'+dep+'/'+arrive+'/'+date,
        data:{},
        success:function(data){
            alert("data");


            $("#list_sidebar").html(data);
        }

     });






}
function rechercherNext(){
    next+=10;
   $.ajax({
       type:'get',
       url:'/RechercherTrajetNext/'+next,
       data:{},
       success:function(data){
           $("#list_sidebar").html(data);


       }
    });

}
$(".icon-th").click(function(){
    $(".box_list").addClass("col-xl-5 col-lg-6 col-md-6 ");

});
$(".icon-th-list").click(function(){
    $(".box_list").removeClass("col-xl-5 col-lg-6 col-md-6 ");



});
