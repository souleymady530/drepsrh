@extends('templateAdmin')
@section("titre")
Diplômes accadémiques
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajoûter une DREPS"/>
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
                                          
                                            <th>DREPS</th>
                                            <th>Premier Responsable</th>
                                            <th>Emploi</th>
                                            <th>Titre</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($directions as $dir)
                                      <tr>
                                            <td>{{$dir->id}}</td>
                                            <td>{{$dir->nomDREPS}}</td>
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
'nomDREPS ',
    'nom1erResponsable',
    'prenom1erResponsable',
    'Emploi1erResponsable',
    'titreHonorifique1resp',

!-->
<div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    <form class="form">
        @csrf
        <label for="nomDREPS" class="form form-control" style="border:none">DREPS</label>
    <input type="text" name="nomDREPS" id="nomDREPS" class="form form-control "/>
   
        <span class=".error-nomDREPS" id="error-nomDREPS" hidden >
       
        </span>
    
<br>

    <label for="nom1erResponsable" class="form form-control" style="border:none">Nom Premier Responsable</label>
    <input type="text" name="nom1erResponsable" id="nom1erResponsable" class="form form-control" required/>
        <span class="help-block" id="error-nom1erResponsable" hidden>
            
        </span>
  
        <br>

    <label for="prenom1erResponsable" class="form form-control" style="border:none">Prenom Premier Responsable</label>
    <input type="text" name="prenom1erResponsable" id="prenom1erResponsable" class="form form-control" required/>
        <span class="help-block" id="error-prenom1erResponsable" hidden>
            
        </span>
        <br>


    <label for="emploi1erResponsable" class="form form-control" style="border:none">Emploi Premier Responsable</label>
    <input type="text" name="emploi1erResponsable" id="emploi1erResponsable" class="form form-control" required/>
        <span class="help-block" id="error-emploi1erResponsable" hidden>
            
        </span>
        <br>


    <label for="titreHonorifique1resp" class="form form-control" style="border:none">Titre Honorifique Premier Responsable</label>
    <input type="text" name="titreHonorifique1resp" id="titreHonorifique1resp" class="form form-control" required/>
        <span class="help-block" id="error-titreHonorifique1resp" hidden>
            
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
    <input type="text" name="nomDREPS" id="nomDREPSModif" class="form form-control" required/>
    
        <span class="help-block" id="error-nomDREPS2"hidden>
            <strong></strong>
        </span>
        <br>


    <label for="nom1erResponsable" class="form form-control" style="border:none">Nom Premier Responsable</label>
    <input type="text" name="nom1erResponsable" id="nom1erResponsableModif" class="form form-control" required/>
   
        <span class="help-block" id="error-nom1erResponsable2" hidden>
            <strong></strong>
        </span>
        <br>

    <label for="prenom1erResponsable" class="form form-control" style="border:none">Prenom Premier Responsable</label>
    <input type="text" name="prenom1erResponsable" id="prenom1erResponsableModif" class="form form-control" required/>
   
        <span class="help-block" id="error-prenom1erResponsable2" hidden>
            <strong></strong>
        </span>
        <br>


    <label for="emploi1erResponsable" class="form form-control" style="border:none">Emploi Premier Responsable</label>
    <input type="text" name="emploi1erResponsable" id="emploi1erResponsableModif" class="form form-control" required/>
   
        <span class="help-block" id="error-emploi1erResponsable2" hidden>
            <strong></strong>
        </span>
    
        <br>

    <label for="titreHonorifique1resp" class="form form-control" style="border:none">Titre Honorifique Premier Responsable</label>
    <input type="text" name="titreHonorifique1resp" id="titreHonorifique1respModif" class="form form-control" required/>
  
        <span class="help-block" id="error-titreHonorifique1resp2" hidden>
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




$(".btnModif").click(function(e){
    
    $(".panModif").attr("hidden",function(){return false;});


    var id=e.target.id;
   
    $("#IDModif").val(id);
    
	$.ajax(
	{
		    url:"{{url('Dreps')}}/"+id+"/edit",
			type:'GET',
			data:
            {
				
			},
			success:function(direction)
            {
                $("#nomDREPSModif").val(direction['nomDREPS']);
                $("#nom1erResponsableModif").val(direction['nom1erResponsable']);
                $("#prenom1erResponsableModif").val(direction['prenom1erResponsable']);
                $("#emploi1erResponsableModif").val(direction['emploi1erResponsable']);
                $("#titreHonorifique1respModif").val(direction['titreHonorifique1resp']);
               
               
			},
           
			
	});

})

$(".btnUpdate").click(function(e)
{
    var token=$(".frmModif input[name=_token]").val();
    var token=$("input[name=_token]").val();
    var nomDREPS=$("#nomDREPSModif").val(),


    nom1erResponable=$("#nom1erResponsableModif").val(),
    prenom1erResponable=$("#prenom1erResponsableModif").val(),
    Emploi1erResponable=$("#emploi1erResponsableModif").val(),
    titreHonorifique=$("#titreHonorifique1respModif").val();

    var id=$("#IDModif").val();

   alert(id)
	$.ajax(
	{
		url:'{{url("/Dreps")}}/'+id+'/',
			type:'PUT',
			data:
            {
                '_token':token,

                'id':id,
                'nomDREPS':nomDREPS,
                'nom1erResponsable':nom1erResponable,
                'prenom1erResponsable':prenom1erResponable,
                'emploi1erResponsable':Emploi1erResponable,
                'titreHonorifique1resp':titreHonorifique,
    
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
    var nomDREPS=$("#nomDREPS").val(),
    nom1erResponable=$("#nom1erResponsable").val(),
    prenom1erResponable=$("#prenom1erResponsable").val(),
    Emploi1erResponable=$("#emploi1erResponsable").val(),
    titreHonorifique=$("#titreHonorifique1resp").val();

	$.ajax(
	{
		url:'{{Route("Dreps.store")}}',
			type:'POST',
			data:
            {
				
				'_token':token,
                'nomDREPS':nomDREPS,
                'nom1erResponsable':nom1erResponable,
                'prenom1erResponsable':prenom1erResponable,
                'emploi1erResponsable':Emploi1erResponable,
                'titreHonorifique1resp':titreHonorifique,


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
		url:'{{url("Dreps")}}/'+id+'/',
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