@extends('templateAdmin')
@section("titre")
Catégories
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajouter Une Fonction"/>

</div>
<div class="row">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les fonctions</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Intitulé </th>
                                            <th>Opérations</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($fonctions as $fct)
                                      <tr>
                                            <td>{{$fct->id}}</td>
                                            <td>{{$fct->NomFonction}}</td>
                                            <td>
                                           
                                            <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$fct->id}}"/>
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$fct->id}}">
                                            
                                                                            
                                            </form>
                                        </td>
                                        </tr>
                                      @endforeach
                                     
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                        {{$links}}      
                    </div>


                    <div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    <form class="form">
        @csrf
        <label for="NomFonction" class="form form-control" style="border:none">Intitulée de la fonction</label>
    <input type="text" name="NomFonction" id="NomFonction" class="form form-control"/>
    <span class="error-NomFonction" id="error-NomFonction" hidden > </span>
   
<br>
    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
    <form action="" method="PUT" class="form frmModif">
        @csrf
        <label for="Fonction" class="form form-control" style="border:none">Intitulé de la fonction</label>
    <input type="text" name="NomFonction" id="Fonction" class="form form-control NomFonctionModif"/>
   
    <span class="error-NomFonction2" id="error-NomFonction2" hidden > </span>

    <input type="hidden" class="ID" value=""/><br>
    <input type="Button" value="Modifier" class="btn btn-success btnUpdate" >
    </form>
</div>
<div class="panSuccess col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
OPERATION REUISSIE
</div>



<script type="text/javascript" src="js/jquery.js"></script>
 <script type="text/javascript">
    $(".btnAdd").click(function()
    {
        $(".pan").attr("hidden",function(){return false})
       
      
    })

    $(".btnFermer").click(function()
    {
        $(".pan").attr("hidden",function(){return true;})
        

    })
    $(".btnFermerModif").click(function()
    {
        $(".panModif").attr("hidden",function(){return true;})
        $(".panSuccess").attr("hidden",function(){return true;})
    })


    function hiddenAllLevel()
    {
        $(".InfoPerso").attr("hidden",function(){return true;})
        $(".InfoActuelle").attr("hidden",function(){return true;})
        $(".InfoAntecedent").attr("hidden",function(){return true;})
    }

    let level="I"
    if(level=="I")
        $(".previewButton").attr("hidden",function(){return true;})    //Button control for next
    $(".nextButton").click(function()
    {
        if(level=="I")
        {

            hiddenAllLevel();
            $(".InfoActuelle").attr("hidden",function(){return false;})
            level="II";

        }
        else if(level=="II")
        {
            hiddenAllLevel();
            $(".InfoAntecedent").attr("hidden",function(){return false;})
            level="III";
        }
        else if(level=="III")
        {
           
            level="IV";
        }
        else
        {
            
            level="I";
        }
    });


     //Button control for next
     $(".previewButton").click(function()
     {
        alert(niveau);

    });



$(".btnModif").click(function(e){
    
    $(".panModif").attr("hidden",function(){return false;});


    var id=e.target.id;

	$.ajax(
	{
		    url:"{{url('Fonction')}}/"+id+"",
			type:'GET',
			data:
            {
				
			},
			success:function(categorie)
            {
				    $(".NomFonctionModif").val(categorie["NomFonction"])
                    $(".ID").val(id);                   
			},
           
			
	});

})

$(".btnUpdate").click(function(e)
{
    var token=$(".frmModif input[name=_token]").val();
   
    var NomCategorie=$(".NomFonctionModif").val();
    var id=$(".ID").val();
   
	$.ajax(
	{
		url:'{{url("/Fonction")}}/'+id+'/',
			type:'PUT',
			data:
            {
                'id':id,'NomFonction':NomCategorie,'_token':token,         
			},
			success:function(message)
            {
				
                $(".panSuccess").attr("hidden",function(){return false;})
                $(".panModif").attr("hidden",function(){return true})
			},
            error:function(data)
            {
                $.each(data.responseJSON.errors,function(i,error)
                    {
                       
                         
                        $("#error-"+i+"2").attr("hidden",function(){return false;})
                        $("#error-"+i+"2").text(error[0]);
                    })

            },
			
	});
})






$(".btnSend").click(function()
{

    var token=$("input[name=_token]").val();
    var NomCategorie=$("#NomFonction").val();
  
	$.ajax(
	{
		url:'{{Route("Fonction.store")}}',
			type:'POST',
			data:
            {
				'NomFonction':NomCategorie,
				'_token':token,
			},
			success:function(message)
            {
                $(".panSuccess").attr("hidden",function(){return false;})
                $(".pan").attr("hidden",function(){return true;})
			},
            error:function(data)
            {
                $.each(data.responseJSON.errors,function(i,error)
                    {
                       
                         
                        $("#error-"+i).attr("hidden",function(){return false;})
                        $("#error-"+i).text(error[0]);
                    })

            },
			
	});
})


$(".btnSupprimer").click(function(e){
   if(confirm("Confirmer la suppression","Confirm","Cancel"))
   {
    var token=$(".frmSup input[name=_token]").val();
    var id=e.target.id;
   
    $.ajax(
	{
		url:'{{url("Fonction")}}/'+id+'/',
			type:'DELETE',
			data:
            {
				'id':id,
				'_token':token,
			},
			success:function(message)
            {
                $(".panModif").attr("hidden",function(){return true});
			},
			
	});

   }
    
})







</script>



<style>
    .form
    {
        background-color:white;
        padding:10px;
    }
    .pan
    {
        background-color:white;
        padding:5px;
        position:absolute;
        top:55px;
        right:25%;
        box-shadow:30px 30px 30px rgb(114,114,114);
        border:solid 2px rgb(192,192,192);
        border-radius:15px;
        
    }

    .panModif
    {
        background-color:white;
        padding:5px;
        position:absolute;
        top:55px;
        right:25%;
        box-shadow:30px 30px 30px rgb(114,114,114);
        border:solid 2px rgb(192,192,192);
        border-radius:15px;
        
    }
    .panSuccess
    {
        background-color:green;
        color:white;
        padding:5px;
        position:absolute;
        top:55px;
        right:25%;
        box-shadow:30px 30px 30px rgb(114,114,114);
        border:solid 2px rgb(192,192,192);
        border-radius:15px;

        
    }

</style>
@endsection
