@extends('templateAdmin')
@section("titre")
Emploi
@endsection


@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajouter Un Emploi"/>

</div>
<div class="row">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les emplois</h6>
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
                                      @foreach($emplois as $emp)
                                      <tr>
                                            <td>{{$emp->id}}</td>
                                            <td>{{$emp->NomEmploi}}</td>
                                            <td>
                                           
                                            <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$emp->id}}"/>
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$emp->id}}">
                                            
                                                                            
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
        <label for="NomEmploi" class="form form-control" style="border:none">Intitulée de l'emploi</label>
    <input type="text" name="NomEmploi" id="NomEmploi" class="form form-control"/>
    <span class="error-NomEmploi" id="error-NomEmploi" hidden > </span>
   <br>
   
    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
    <form action="" method="PUT" class="form frmModif">
        @csrf
        <label for="Fonction" class="form form-control" style="border:none">Intitulé de l'emploi'</label>
    <input type="text" name="NomEmploi" id="Fonction" class="form form-control NomEmploiModif"/>
   
    <span class="error-NomEmploi2" id="error-NomEmploi2" hidden > </span>

    <input type="hidden" class="ID" value=""/><br>
    <input type="Button" value="Modifier" class="btn btn-success btnUpdate" >
    </form>
</div>
<div class="panSuccess col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
OPERATION REUISSIE
</div>



<script type="text/javascript" src="js/jquery.js"></script>
 <script>
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
		    url:"{{url('Emploi')}}/"+id+"",
			type:'GET',
			data:
            {
				
			},
			success:function(emploi)
            {
				    $(".NomEmploiModif").val(emploi["NomEmploi"])
                    $(".ID").val(id);                   
			},
           
			
	});

})

$(".btnUpdate").click(function(e)
{
    var token=$(".frmModif input[name=_token]").val();
   
    var NomEmploi=$(".NomEmploiModif").val();
    var id=$(".ID").val();
   
	$.ajax(
	{
		url:'{{url("/Emploi")}}/'+id+'/',
			type:'PUT',
			data:
            {
                'id':id,'NomEmploi':NomEmploi,'_token':token,         
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
    var NomEmploi=$("#NomEmploi").val();
  
	$.ajax(
	{
		url:'{{Route("Emploi.store")}}',
			type:'POST',
			data:
            {
				'NomEmploi':NomEmploi,
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
		url:'{{url("Emploi")}}/'+id+'/',
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
