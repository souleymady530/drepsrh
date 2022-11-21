            @extends('templateAdmin')
@section("titre")
Type De Personnel
@endsection


@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajouter Un Etablissement"/>

</div>
<div class="row">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les etablissements</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom de l'etablissement</th>
                                            <th>Localité</th>
                                            <th>Opérations</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($etablissements as $ets)
                                      <tr>
                                            <td>{{$ets->id}}</td>
                                            <td>{{$ets->nomEtablissement}}</td>
                                             <td>{{$ets->localite}}</td>
                                            <td>
                                           
                                            <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$ets->id}}"/>
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$ets->id}}">
                                            
                                                                            
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
        <label for="nomEtablissement" class="form form-control" style="border:none">Nom de l'etablissement</label>
    <input type="text" name="nomEtablissement" id="nomEtablissement" class="form form-control"/>
    <span class="help-block" id="error-nomEtablissement" hidden></span>
    
    <label for="localite" class="form-control" style="border:none">Choisir la localité</label>
    
    <input type="text" name="localite" id="localite" class="form form-control"/>
    <span class="help-block" id="error-localite" hidden></span>

    <label for="idDpeps" class="form-control" style="border:none">Choisir la DREPS Hote</label>
   <select name="idDpeps" class="form-control" id="idPeps">
    @Foreach($dpeps as $dp)
            <option value="{{$dp->id}}">{{$dp->nomDPEPS}}</option>
    @Endforeach
        </select>
<br>

    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
<form class="form">
        @csrf
        <label for="nomEtablissement2" class="form form-control" style="border:none">Nom de l'etablissement</label>
    <input type="text" name="nomEtablissement" id="nomEtablissement2" class="form form-control"/>
    <span class="help-block" id="error-nomEtablissement2" hidden></span>
    
    <label for="localite2" class="form-control">Choisir la localité</label>
    <input type="text" name="localite2" id="localite2" class="form form-control"/>
    <span class="help-block" id="error-localite2" hidden></span>
    
    
    <input type="hidden" name="ID" class="form-control" id="ID" value="MIN" hidden>

    <label for="idDpeps" class="form-control" style="border:none">Choisir la DREPS Hote</label>
   <select name="idDpeps" class="form-control" id="idDpeps">
    @foreach($dpeps as $dp)
            <option value="{{$dp->id}}">{{$dp->nomDPEPS}}</option>
    @endforeach
        </select>

   
    <br>

    <input type="Button" value="Ajouter" class="btn btn-success btnUpdate" >
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
		    url:"{{url('Ets')}}/"+id+"",
			type:'GET',
			data:
            {
				
			},
			success:function(Ets)
            {
                $("#nomEtablissement2").val(Ets["nomEtablissement"])
                $("#localite2").val(Ets["localite"]);
                    $("#ID").val(id);                   
			},
           
			
	});

})




$(".btnUpdate").click(function(e)
{
    var token=$("input[name=_token]").val();
    var nomEtablissement=$("#nomEtablissement2").val();
    var localite=$("#localite2").val();
    var id=$("#ID").val();
    var idDpeps=$("#idDpeps").val();
    /*alert(localite);
    alert(nomEtablissement);
    alert(id);
    */


	$.ajax(
	{
		url:'{{url("Ets")}}/'+id,
			type:'PUT',
			data:
            {
				'nomEtablissement':nomEtablissement,
                "localite":localite,
                "idDpeps":idDpeps,
                'id':id,
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






$(".btnSend").click(function()
{

    var token=$("input[name=_token]").val();
    var nomEtablissement=$("#nomEtablissement").val();
    var localite=$("#localite").val();
    var idDpeps=$("#idDpeps").val();
   /* alert(localite);
    alert(nomEtablissement);

    alert(nomEtablissement);
*/
//alert(idDpeps);

	$.ajax(
	{
		url:'{{Route("Ets.store")}}',
			type:'POST',
			data:
            {
				'nomEtablissement':nomEtablissement,
                "localite":localite,
                "idDpeps":idDpeps,
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
		url:'{{url("Ets")}}/'+id+'/',
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
