@extends('templateAdmin')
@section("titre")
Diplômes accadémiques
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajoûter une DPEPS"/>
<input type="button" class="btn btn-secondary btnReload" value="Actualiser La Liste"/>
</div>
<div class="row">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les DPEPS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                          
                                            <th>DPEPS</th>
                                            <th>DREPS</th>
                                            <th>Premier Responsable</th>
                                            <th>Emploi Responsable</th>
                                            <th>Titre Responsable</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($directions as $dir)
                                      <tr>
                                            <td>{{$dir->id}}</td>
                                            <td>{{$dir->nomDPEPS}}</td>
                                            <td>{{$dir->DREPS}}</td>
                                            <td>{{$dir->nom1erResponsable}} {{$dir->prenom1erResponsable}}</td>
                                            <td>{{$dir->emploi1erResponsable}}</td>
                                            <td>{{$dir->titreHonorifique1resp}}</td>

                                            <td>
                                             
                                                <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$dir->id}}"/>
                                           
                                       
                                          
                                            </td>
                                        <td> 
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$dir->id}}">
                                            
                                                                            
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
''id',
    'nomDPEPS',
    'nom1erRespDPEPS',
    'prenom1erRespDPEPS',
    'Emploi1erRespDPEPS',
    'titreHonor1respDPEPS',
    'DREPS',

!-->
<div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    <form class="form">
        @csrf
        <label for="nomDREPS" class="form form-control" style="border:none">DREPS</label>
        <select name="DREPS" class="form-control" id="DREPS">
            @foreach($dreps as $directions)
                <option value="{{$directions->id}}">{{$directions->nomDREPS}}</option>
            @endforeach
        </select>
        <br>
        <label for="nomDREPS" class="form form-control" style="border:none">DPEPS</label>
         <input type="text" name="nomDPEPS" id="nomDPEPS" class="form form-control "/>
   
        <span class=".error-nomDPEPS" id="error-nomDPEPS" hidden >
       
        </span>
    
        <br>

    <label for="nom1erRespDPEPS" class="form form-control" style="border:none">Nom Premier Responsable</label>
    <input type="text" name="nom1erRespDPEPS" id="nom1erRespDPEPS" class="form form-control" required/>
    
        <span class="help-block" id="error-nom1erRespDPEPS" hidden>
            
        </span>
  
        <br>

    <label for="prenom1erRespDPEPS" class="form form-control" style="border:none">Prenom Premier Responsable</label>
    <input type="text" name="prenom1erRespDPEPS" id="prenom1erRespDPEPS" class="form form-control" required/>
   
        <span class="help-block" id="error-prenom1erRespDPEPS" hidden>
            
        </span>
        <br>


    <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Emploi Premier Responsable</label>
    <input type="text" name="Emploi1erRespDPEPS" id="Emploi1erRespDPEPS" class="form form-control" required/>
   
        <span class="help-block" id="error-Emploi1erRespDPEPS" hidden>
            
        </span>
        <br>


    <label for="titreHonor1respDPEPS" class="form form-control" style="border:none">Titre Honorifique Premier Responsable</label>
    <input type="text" name="titreHonor1respDPEPS" id="titreHonor1respDPEPS" class="form form-control" required/>
  
        <span class="help-block" id="error-titreHonor1respDPEPS" hidden>
            
        </span>
        <br>







    <input type="Button" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>

<div class="panModif col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
    <form action="" method="PUT" class="form frmModif">
        @csrf
        <label for="nomDREPS" class="form form-control" style="border:none">DREPS</label>
        <select name="DREPS" class="form-control" id="DREPSModif">
            @foreach($dreps as $directions)
                <option value="{{$directions->id}}">{{$directions->nomDREPS}}</option>
            @endforeach
        </select>
        
        <label for="nomDPEPS" class="form form-control" style="border:none">DREPS</label>
    <input type="text" name="nomDPEPS" id="nomDPEPSModif" class="form form-control" required/>
    
        <span class="help-block" id="error-nomDPEPS2"hidden>
            <strong></strong>
        </span>
        <br>


    <label for="nom1erRespDPEPS" class="form form-control" style="border:none">Nom Premier Responsable</label>
    <input type="text" name="nom1erRespDPEPS" id="nom1erRespDPEPSModif" class="form form-control" required/>
   
        <span class="help-block" id="error-nom1erRespDPEPS2" hidden>
            <strong></strong>
        </span>
        <br>

    <label for="prenom1erRespDPEPS" class="form form-control" style="border:none">Prenom Premier Responsable</label>
    <input type="text" name="prenom1erRespDPEPS" id="prenom1erRespDPEPSModif" class="form form-control" required/>
   
        <span class="help-block" id="error-prenom1erRespDPEPS2" hidden>
            <strong></strong>
        </span>
        <br>


    <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Emploi Premier Responsable</label>
    <input type="text" name="Emploi1erRespDPEPS" id="Emploi1erRespDPEPSModif" class="form form-control" required/>
   
        <span class="help-block" id="error-Emploi1erRespDPEPS2" hidden>
            <strong></strong>
        </span>
    
        <br>

    <label for="titreHonor1respDPEPS" class="form form-control" style="border:none">Titre Honorifique Premier Responsable</label>
    <input type="text" name="titreHonorrespDPEPS" id="titreHonor1respDPEPSModif" class="form form-control" required/>
  
        <span class="help-block" id="error-titreHonor1respDPEPS2" hidden>
            <strong></strong>
        </span>
   
        <br>
        <input type="hidden" id="IDModif" value=""/>


    <input type="Button" value="Modifier" class="btn btn-success btnUpdate" >
    </form>
</div>
<div class="panSuccess col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermerModif" value="FERME X" style="margin-left:85%">
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
   
    $("#IDModif").val(id);
	$.ajax(
	{
		    url:"{{url('Dpeps')}}/"+id+"/edit",
			type:'GET',
			data:
            {
				
			},
			success:function(direction)
            {
                $("#nomDPEPSModif").val(direction['nomDPEPS']);
                $("#DREPSModif").val(direction['DREPS']);
                $("#nom1erRespDPEPSModif").val(direction['nom1erRespDPEPS']);
                $("#prenom1erRespDPEPSModif").val(direction['prenom1erRespDPEPS']);
                $("#Emploi1erRespDPEPSModif").val(direction['Emploi1erRespDPEPS']);
                $("#titreHonor1respDPEPSModif").val(direction['titreHonor1respDPEPS']);
               
               
			},
           
			
	});

})



$(".btnUpdate").click(function(e)
{
    var token=$(".frmModif input[name=_token]").val();
    var token=$("input[name=_token]").val();

    var DREPS=$("#DREPSModif").val(),

    nomDPEPS=$("#nomDPEPSModif").val(),
    nom1erResponable=$("#nom1erRespDPEPSModif").val(),
    prenom1erResponable=$("#prenom1erRespDPEPSModif").val(),
    Emploi1erResponable=$("#Emploi1erRespDPEPSModif").val(),
    titreHonorifique=$("#titreHonor1respDPEPSModif").val();

    
    var id=$("#IDModif").val();
    
   
	$.ajax(
	{
		url:'{{url("/Dpeps")}}/'+id+'/',
			type:'PUT',
			data:
            {
                '_token':token,
                'nomDPEPS':nomDPEPS,
                'nom1erRespDPEPS':nom1erResponable,
                'prenom1erRespDPEPS':prenom1erResponable,
                'Emploi1erRespDPEPS':Emploi1erResponable,
                'titreHonor1respDPEPS':titreHonorifique,
                'DREPS':DREPS,

    
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
    var DREPS=$("#DREPS").val(),

    nomDPEPS=$("#nomDPEPS").val() ? $("#nomDPEPS").val():"" ,
    nom1erResponable=$("#nom1erRespDPEPS").val(),
    prenom1erResponable=$("#prenom1erRespDPEPS").val(),
    Emploi1erResponable=$("#Emploi1erRespDPEPS").val(),
    titreHonorifique=$("#titreHonor1respDPEPS").val();
   
	
    $.ajax(
	{
		url:'{{Route("Dpeps.store")}}',
			type:'POST',
			data:
            {
				
				'_token':token,
                'nomDPEPS':nomDPEPS,
                'nom1erRespDPEPS':nom1erResponable,
                'prenom1erRespDPEPS':prenom1erResponable,
                'Emploi1erRespDPEPS':Emploi1erResponable,
                'titreHonor1respDPEPS':titreHonorifique,
                'DREPS':DREPS,

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
               
            }
			
	});
    


})


$(".btnSupprimer").click(function(e){
   if(confirm("Confirmer la suppression","Confirm","Cancel"))
   {
    var token=$(".frmSup input[name=_token]").val();
    var id=e.target.id;
  
    $.ajax(
	{
		url:'{{url("Dpeps")}}/'+id+'/',
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