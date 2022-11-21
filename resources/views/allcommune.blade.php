@extends('templateAdmin')
@section("titre")
Commune
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajouter une commune"/>

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
                                            <th>Commune</th>
                                            <th>DPEPS</th>
                                            <th>Opérations</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($communes as $com)
                                      <tr>
                                            <td>{{$com->id}}</td>
                                            <td>{{$com->nomCommune}}</td>
                                            <td>{{$com->DPEPS}}</td>
                                            <td>
                                           
                                            <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$com->id}}"/>
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$com->id}}">
                                            
                                                                            
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
    'nomCommune',
    'DPEPS',

                    -->
                    <div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    <form class="form">
        @csrf
        <label for="nomCommune" class="form form-control" style="border:none">Commune</label>
    <input type="text" name="nomCommune" id="nomCommune" class="form form-control"/>
    <span class="error-nomCommune" id="error-nomCommune" hidden >
       
        </span>


    <label for="Dpeps" class="form form-control" style="border:none">Dpeps</label>
    <select name="DPEPS" class=" form-control" id="DPEPS">
    @foreach($dpeps as $dp)
        <option value="{{$dp->id}}">{{$dp->nomDPEPS}}</option>
    @endforeach
    </select>
    <span class="error-DPEPS" id="error-DPEPS" hidden > </span>
<br>

    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
    <form action="" method="PUT" class="form frmModif">
    @csrf
        <label for="nomCommuneModif" class="form form-control" style="border:none">Commune</label>
    <input type="text" name="nomCommuneModif" id="nomCommuneModif" class="form form-control"/>
    <span class="error-nomCommuneModif" id="error-nomCommuneModif" hidden >
       
        </span>
    <label for="DPEPSModif" class=" form-control" style="border:none">DPEPS</label>
    <select name="DPEPSModifs" class="form form-control" id="DPEPSModif">
    @foreach($dpeps as $dp)
        <option value="{{$dp->id}}">{{$dp->nomDPEPS}}</option>
    @endforeach
    </select>
<br>
    <input type="hidden" id="ID" value=""/>
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
		    url:"{{url('Commune')}}/"+id+"",
			type:'GET',
			data:
            {
				
			},
			success:function(Commune)
            {
				    $("#nomCommuneModif").val(Commune["nomCommune"]);
                    $("#DPEPSModif").val(Commune["DPEPS"]);
                    $("#ID").val(id);                   
			},
           
			
	});

})

$(".btnUpdate").click(function(e)
{
    var token=$("input[name=_token]").val();
    var nomCommune=$("#nomCommuneModif").val();
    var Dpeps=$("#DPEPSModif").val();

    var id=$("#ID").val();
   
	$.ajax(
	{
		url:'{{url("/Commune")}}/'+id+'/',
			type:'PUT',
			data:
            {
                '_token':token,
                'nomCommune':nomCommune,
                'DPEPS':Dpeps,
                'id':id     
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
    var nomCommune=$("#nomCommune").val();
    var Dpeps=$("#DPEPS").val();
	$.ajax(
	{
		url:'{{Route("Commune.store")}}',
			type:'POST',
			data:
            {
				'_token':token,
                'nomCommune':nomCommune,
                'DPEPS':Dpeps,
			},
			success:function(message)
            {
                $(".pan").attr("hidden",function(){return true})
                $(".panSuccess").attr("hidden",function(){return false;})
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
		url:'{{url("Commune")}}/'+id+'/',
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
