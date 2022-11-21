const modal=document.querySelector(".modal1");
const overlay=document.querySelector(".overlay");
const openModalBtn=document.querySelector(".rowGalery .carteImg");
var closeModalBtn;
$(".rowGalery .carteImg").click(function(event)
{
   
    var srcImg=event.target.src,idImg=event.target.id;
    //alert(srcImg)
    if(typeof srcImg !== "undefined")
    {
        modal.classList.remove("hidden");
        overlay.classList.remove("hidden");
        $(".panImagePleine").text("");
        $("body .panImagePleine").append('<img src="'+srcImg+'" id="pleineImage" style=""/><input type="button" value="Fermer" class="btn btn-danger btnFermerImgPane" onclick="closeFunction()" style="width:100px;"/><i class="fa fa-arrow-left" onclick="prevImage('+idImg+')"></i><i class="fa fa-arrow-right" onclick="nextImage('+idImg+')"></i>');
        $("body .panImagePleine").attr("hidden",function(){return false;})
    }
   
    
})



function closeFunction()
{

    modal.classList.add("hidden");
    overlay.classList.add("hidden");
}
overlay.addEventListener("click",closeFunction)

function prevImage(id)
{
    //alert(id)
    var idPrev=id-1;
   
    $.ajax({
        url:"Gallery/"+idPrev+"/edit",
        type:'GET',
        data:
        {
           
        },
        success:function(foto)
        {
            
            $("body .panImagePleine").attr("hidden",function(){return true;})
            modal.classList.remove("hidden");
            overlay.classList.remove("hidden");
            $(".panImagePleine").text("");
            $("body .panImagePleine").append('<img src="'+foto["chemin"]+'" id="pleineImage" /><input type="button" value="Fermer" class="btn btn-danger btnFermerImgPane" onclick="closeFunction()" style="width:100px;"/><i class="fa fa-arrow-left" onclick="prevImage('+idPrev+')"></i><i class="fa fa-arrow-right" onclick="nextImage('+idPrev+')"></i>');
            $("body .panImagePleine").attr("hidden",function(){return false;})
            $("body .panImagePleine").attr("hidden",function(){return false;})
        },
        error:function()
        {
            if(idPrev>0)
            {
                prevImage(idPrev)
            }
            else
            {

            }
        }
    });
       
}


function nextImage(id)
{
    //alert(id)
    var idPrev=id+1;
   
    $.ajax({
        url:"Gallery/"+idPrev+"/edit",
        type:'GET',
        data:
        {
           
        },
        success:function(foto)
        {
            
            $("body .panImagePleine").attr("hidden",function(){return true;})
            modal.classList.remove("hidden");
            overlay.classList.remove("hidden");
            $(".panImagePleine").text("");
            $("body .panImagePleine").append('<img src="'+foto["chemin"]+'" id="pleineImage" /><input type="button" value="Fermer" class="btn btn-danger btnFermerImgPane" onclick="closeFunction()" style="width:100px;"/><i class="fa fa-arrow-left" onclick="prevImage('+idPrev+')"></i><i class="fa fa-arrow-right" onclick="nextImage('+idPrev+')"></i>');
            $("body .panImagePleine").attr("hidden",function(){return false;})
            $("body .panImagePleine").attr("hidden",function(){return false;})
        },
        error:function()
        {
             
            
        }
    });
       
}

