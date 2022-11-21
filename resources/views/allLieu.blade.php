@extends('templateAdmin')
@section("titre")
Diplômes accadémiques
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajoûter un diplôme"/>
<input type="button" class="btn btn-secondary btnReload" value="Actualiser La liste"/>
</div>
<div class="row">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>

                                        <tr>
                                            <th>ID</th>
                                            <th>Lieu de travail</th>
                                            <th>Type de lieux</th>
                                             <th>Localité</th>
                                            <th>Actions</th>
                                        </tr>

                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($lieux as $lieu)
                                      <tr>
                                            <td>{{$lieu->id}}</td>
                                            <td>{{$lieu->nomLieuDeTravail}}</td>
                                            <td>{{$lieu->Localite}}</td>
                                            <td>
                                             
                                                <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$lieu->id}}"/>
                                           
                                       
                                          
                                            </td>
                                        <td> 
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$lieu->id}}">
                                            
                                                                            
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
'id',
    'nomLieuDeTravail',
    'TypeLieuDeTravail',
    'Localite',
-->
<div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    <form class="form">
        @csrf
        <label for="nomLieuDeTravail" class="form form-control" style="border:none">Lieu de travail</label>
    <input type="text" name="nomLieuDeTravail" id="nomLieuDeTravail" class="form form-control"/>
    <span class="help-block" id="error-nomLieuDeTravail2" hidden>
           
           </span>

    

    <label for="TypeLieuDeTravail" class="form form-control" style="border:none">Type de Lieu de travail</label>
    <input type="text" name="TypeLieuDeTravail" id="TypeLieuDeTravail" class="form form-control"/>
    <span class="help-block" id="error-TypeLieuDeTravail2" hidden>
           
           </span>
    
   
    <label for="Localite" class="form-control" style="border:none">Localité</label>
    <select name="Localite" id="Localite" class="form-control">
        @foreach($localites as $loc)
        <option value="{{$loc->id}}">{{$loc->nomLocalite}}</option>
        @endforeach
    </select>
  <br>
    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
    <form action="#" method="PUT" class="form frmModif">
    @csrf
        <label for="nomLieuDeTravailModif" class="form form-control" style="border:none">Lieu de travail</label>
    <input type="text" name="nomLieuDeTravailModif" id="nomLieuDeTravailModif" class="form form-control"/>
    <span class="help-block" id="error-nomLieuDeTravailModif2" hidden>
           
           </span>

    

    <label for="TypeLieuDeTravailModif" class="form form-control" style="border:none">Type de Lieu de travail</label>
    <input type="text" name="TypeLieuDeTravailModif" id="TypeLieuDeTravailModif" class="form form-control"/>
    <span class="help-block" id="error-TypeLieuDeTravailModif2" hidden>
           
           </span>

    
   
    <label for="LocaliteModif" class=" form-control" style="border:none">Localité</label>
    <select name="LocaliteModif" id="LocaliteModif" class="form-control">
        @foreach($localites as $loc)
        <option value="{{$loc->id}}">{{$loc->nomLocalite}}</option>
        @endforeach
    </select>


    <input type="hidden" id="ID" value=""/>
    <input type="Button" value="Modifier" class="btn btn-success btnUpdate" >
    </form>
</div>
<div class="panSuccess col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
OPERATION REUISSIE
</div>

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
		    url:"{{url('LieuDeTravail')}}/"+id+"",
			type:'GET',
			data:
            {
				
			},
			success:function(lieu)
            {
				   
                    $("#nomLieuDeTravailModif").val(lieu["nomLieuDeTravail"])
                    $("#TypeLieuDeTravailModif").val(lieu["TypeLieuDeTravail"])
                    $("#LocaliteModif").val(lieu["Localite"])
                    $("#ID").val(id);                   
			},
           
			
	});

})

$(".btnUpdate").click(function(e)
{
    var token=$("input[name=_token]").val();
    var nomLieuDeTravail=$("#nomLieuDeTravailModif").val(),
    TypeLieuDeTravail=$("#TypeLieuDeTravailModif").val(),
    localite=$("#LocaliteModif").val();
    var id=$("#ID").val();
   
	$.ajax(
	{
		url:'{{url("/LieuDeTravail")}}/'+id+'/',
			type:'PUT',
			data:
            {
                'nomLieuDeTravail':nomLieuDeTravail,
                'TypeLieuDeTravail':TypeLieuDeTravail,
                'Localite':localite,
                "id":id,  
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
                       
                         
                        $("#error-"+i+"2").attr("hidden",function(){return false;})
                        $("#error-"+i+"2").text(error[0]);
                    })

            },
			
	});
})




/*
'nomLieuDeTravail',
    'TypeLieuDeTravail',
    'Localite',
*/

$(".btnSend").click(function()
{

    var token=$("input[name=_token]").val();
    var nomLieuDeTravail=$("#nomLieuDeTravail").val(),
    TypeLieuDeTravail=$("#TypeLieuDeTravail").val(),
    localite=$("#Localite").val();
  
	$.ajax(
	{
		url:'{{Route("LieuDeTravail.store")}}',
			type:'POST',
			data:
            {
				'nomLieuDeTravail':nomLieuDeTravail,
                'TypeLieuDeTravail':TypeLieuDeTravail,
                'Localite':localite,
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
		url:'{{url("LieuDeTravail")}}/'+id+'/',
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

@endsection