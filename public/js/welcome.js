var currentImageActive=0;
let slideIndex = 0;
showSlides();
const canvas=document.querySelector(".organigramme");
const width=canvas.width=window.innerWidth;
const height=canvas.height=window.innerHeight;
canContext=canvas.getContext('2d');

//tete
canContext.fillStyle="green";
canContext.fillRect(550,0,200,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("Direction Regionale",560,30);

/*canContext.fillStyle="green";
canContext.fillRect(555,5,190,40);*/


canContext.fillStyle="green";
canContext.fillRect(595 ,50,5,500);


canContext.fillStyle="green";
canContext.fillRect(520,250,170,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("Services Internes",525,275);



//gauche





//droite
canContext.fillStyle="green";
canContext.fillRect(420,310,150,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("Sécrétariat",425,335);




canContext.fillStyle="green";
canContext.fillRect(570,330,205,5);



canContext.fillStyle="green";
canContext.fillRect(625,310,150,50);  
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SGRFM",655,335);




canContext.fillStyle="green";
canContext.fillRect(420,380,150,50);

canContext.fillStyle="green";
canContext.fillRect(570,400,205,5);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("Les Régies",425,410);



canContext.fillStyle="green";
canContext.fillRect(625,380,150,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SGRH",655,410);









canContext.fillStyle="green";
canContext.fillRect(420,450,150,50);

canContext.fillStyle="green";
canContext.fillRect(570,470,205,5);
canContext.font="20px arial";
canContext.fillStyle="rgb(255,201,14)";
canContext.fillText("SEP",455,475);




canContext.fillStyle="green";
canContext.fillRect(625,450,150,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SAD",655,475);
//*************************************************** */
//extreme droite
canContext.fillStyle="green";
canContext.fillRect(705 ,50,5,200);







canContext.fillStyle="green";
canContext.fillRect(710,125,20,5);



canContext.fillStyle="green";
canContext.fillRect(730,100,200,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("Services Externes",735,120);


canContext.fillStyle="green";
canContext.fillRect(710,245,20,5);

canContext.fillStyle="green";
canContext.fillRect(730,230,200,50);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("Services Externes",735,260);






//1er niveau
canContext.fillStyle="green";
canContext.fillRect(155,550,1200,5);




//1er service
canContext.fillStyle="green";
canContext.fillRect(155,555,5,55);
canContext.fillRect(55,605,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SECS",125,635);

 //2eme service
 canContext.fillStyle="green";
canContext.fillRect(355,555,5,110);
canContext.fillRect(255,665,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SEFP",330,700);


 //3eme service
 canContext.fillStyle="green";
canContext.fillRect(555,555,5,55);
canContext.fillRect(455,605,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SSs",525,635);



 //4eme service
 canContext.fillStyle="green";
canContext.fillRect(755,555,5,110);
canContext.fillRect(655,665,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SEIPFG",725,700);


 //5eme service
 canContext.fillStyle="green";
canContext.fillRect(955,555,5,55);
canContext.fillRect(855,605,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SEMPC",915,635);






//6eme service
canContext.fillStyle="green";
canContext.fillRect(1150,555,5,110);
canContext.fillRect(1055,665,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SASCL",1115,700);



//7eme service
canContext.fillStyle="green";
canContext.fillRect(1350,555,5,55);
canContext.fillRect(1255,605,200,55);
canContext.font="20px arial";
canContext.fillStyle="white";
canContext.fillText("SCTIC",1320,635);

























$(".carteStatistique").hover(function(event)
{
var mouseX=event.clientX,mouseY=event.clientY;

})
function showSlides() {
let i;
let slides = document.getElementsByClassName("mySlides");
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
slides[slideIndex-1].style.display = "block";
setTimeout(showSlides, 2000); // Change image every 2 seconds
} 
$(".carteActualite span").click(function(event)
{
var idActu=event.target.id
//alert(idActu)
$(".panActualite").text("");
$.ajax({
url:"{{url('showActualite')}}/"+idActu,
type:'GET',
data:
{
    
},
success:function(actualite)
{
    $(".panActualite").append('<div class="row"><div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 " style="border-right:solid 1px rgb(192,192,192)"><img src="'+actualite["chemin"]+'" class="imageCentrale"/><hr/>'+actualite["titre"]+'<hr/>'+actualite["resume1"]+' '+actualite["resume2"]+' '+actualite["resume3"]+' '+actualite["resume4"]+
    '</div><div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 panListeActualites" style="height:700px;overflow:scroll;scrollbar-width: none;"></div>')

},
});



$.ajax({
url:"{{url('allActualites')}}",
type:'GET',
data:
{
    
},
success:function(actualites)
{

    $(".panListeActualites").text("");
    $(".panListeActualites").append('<h5 style="color:rgb(67,105,215);text-align:center;margin-top:5px;">A Lire Aussi</h5><hr/>');
    var total=actualites.length 
    for(var i=0;i<total;i++)
        {
            $(".panListeActualites").append('<div class="col-lg-12" style=""><img src="'+ actualites[i]["chemin"]+'" style="width:100%;height:100px;"/><br/><span onclick="afficherActualite('+actualites[i]["id"]+')" style="cursor:pointer;">'+actualites[i]["titre"]+'</span></div><hr/>');
        }
},
});


})

/*
$(".rowGalery img").click(function(event)
{
var srcImg=event.target.src,idImg=event.target.id;

//alert(srcImg);
$("body .container-fluid").attr("hidden",function(){return true;})
$("body .panImagePleine").attr("hidden",function(){return false;})
// $("body").append('<div class="panImagePleine"></div>')

$(".panImagePleine").text("");
$("body .panImagePleine").append('<img src="'+srcImg+'" class="pleinImage"/><input type="button" value="Fermer" class="btn btn-danger btnFermerImgPane" onclick="retour()" style="width:100px;"/><i class="fa fa-arrow-left" onclick="faLeftClick('+idImg+')"></i><i class="fa fa-arrow-right" onclick="faRightClick('+idImg+')"></i>');
//$(".panImagePleine").attr("hidden",function(){return false;})





});*/
function faLeftClick(idImg)
{
alert(idImg);
}


function faRightClick(idImg)
{
alert(idImg);
}


//this function hidden body .panImagePleine and unhidden the initial body
function retour()
{

$("body .container-fluid").attr("hidden",function(){return false;})
$("body .panImagePleine").attr("hidden",function(){return true;})
}
