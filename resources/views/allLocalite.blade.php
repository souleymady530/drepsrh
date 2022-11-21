@extends('templateAdmin')
@section("titre")
Localité
@endsection


@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajouter Une localité"/>

</div>
<div class="row">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les types</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Localité </th>
                                            <th>Commune </th>
                                            <th>Opérations</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($localites as $loc)
                                      <tr>
                                            <td>{{$loc->id}}</td>
                                            <td>{{$loc->nomLocalite}}</td>
                                            <td>{{$loc->Commune}}</td>
                                            <td>
                                           
                                            <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$loc->id}}"/>
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$loc->id}}">
                                            
                                                                            
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
<!--
      'nomLocalite',
    'Commune',
-->

                    <div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    <form class="form">
        @csrf
        <label for="nomLocalite" class="form form-control" style="border:none">Nom de la localité</label>
    <input type="text" name="nomLocalite" id="nomLocalite" class="form form-control"/>
    <span class="help-block" id="error-nomLocalite" hidden>
           
        </span>
  
  
  
  
  
   

    <label for="Commune" class="form form-control" style="border:none">Commune de</label>
    
    <select name="Commune" class=" form-control" id="Commune">
        @foreach($communes as $com)
            <option value="{{$com->id}}">{{$com->nomCommune}}</option>
        @endforeach
    </select>
    <span class="help-block" id="error-Commune" hidden>
           
           </span>
     

    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
    <form action="" method="PUT" class="form frmModif">
    @csrf
        <label for="nomLocaliteModif" class="form form-control" style="border:none">Nom de la localité</label>
    <input type="text" name="nomLocalite" id="nomLocaliteModif" class="form form-control"/>
    <span class="help-block" id="error-nomLocaliteModif" hidden>
           
        </span>
  
  
  
  
  
   

    <label for="CommuneModif" class="form form-control" style="border:none">Commune de</label>
    
    <select name="CommuneModif" class="form-control" id="CommuneModif">
        @foreach($communes as $com)
            <option value="{{$com->id}}">{{$com->nomCommune}}</option>
        @endforeach
    </select>
    <span class="help-block" id="error-CommuneModif" hidden>
           
           </span>
     


    <input type="hidden" id="IDModif" value=""/>
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
		    url:"{{url('Localite')}}/"+id+"",
			type:'GET',
			data:
            {
				
			},
			success:function(localite)
            {
				    $("#nomLocaliteModif").val(localite["nomLocalite"])
                    $("#CommuneModif").val(localite["Commune"])
                   
                    $("#IDModif").val(id);                   
			},
           
			
	});

})

$(".btnUpdate").click(function(e)
{
    var token=$("input[name=_token]").val();
    var nomLocalite=$("#nomLocaliteModif").val();
    var commune=$("#CommuneModif").val();
    var id=$("#IDModif").val();

   
    $.ajax(
	{
		url:'{{url("/Localite")}}/'+id+'/',
			type:'PUT',
			data:
            {
                'nomLocalite':nomLocalite,
                'Commune':commune,
                'id':id,
				'_token':token,      
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
                       
                         
                        $("#error-"+i+"Modif").attr("hidden",function(){return false;})
                        $("#error-"+i+"Modif").text(error[0]);
                    })

            },
			
	});
	
})






$(".btnSend").click(function()
{

    var token=$("input[name=_token]").val();
    var nomLocalite=$("#nomLocalite").val();
    var commune=$("#Commune").val();

   

	$.ajax(
	{
		url:'{{Route("Localite.store")}}',
			type:'POST',
			data:
            {
				'nomLocalite':nomLocalite,
                'Commune':commune,
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
		url:'{{url("Localite")}}/'+id+'/',
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
