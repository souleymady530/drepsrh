@extends('templateAdmin')
@section("titre")
Diplômes accadémiques
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary btnAdd" value="Ajoûter une actualité"/>
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
                                            <th>Titre</th>
                                            <th>Chemin Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($actualites as $act)
                                      <tr>
                                            <td>{{$act->id}}</td>
                                            <td>{{$act->titre}}</td>
                                            <td><img src="{{$act->chemin}}" alt="img source" width="200"/></td>

                                            <td>
                                                <input type="button" class="btn btn-primary btnVoir" value="Voir" id="{{$act->id}}" />
                                                   {!! link_to_route('Actualite.edit', 'Modifier', [$act->id], ['class' => 'btn btn-warning btn-block']) !!} {!! Form::open(['method' => 'DELETE', 'route' => ['Actualite.destroy', $act->id]]) !!} 
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block']) !!}
								{!! Form::close() !!}</td>
                                        
                                       
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
<form method="post" action="{{Route('Actualite.store')}}" class= "form-horizontal" enctype="multipart/form-data">
        @csrf
        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Entrez un titre</label>
        <input type="text" name="titre" id="Titre" class="form form-control" required/>
        



        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Choisir une image</label>
        <input type="file" name="chemin" id="chemin" class="form form-control" required/>

        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Ecrire un petit resumé</label>
        <textarea name="resume" id="resume" class="form form-control" required/></textarea>

        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Choisir la date</label>
        <input type="date" name="datePublication" id="Titre" class="form form-control" required/>

      
        <input type="submit" value="Ajouter" class="btn btn-success btnSend" >
    </form>
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
   
$(".btnModifier").click(function(event)
{
   
})



$(".btnAdd").click(function()
{
    $(".pan").attr("hidden",function(){return false;})
})

$(".btnFermer").click(function()
{
    $(".pan").attr("hidden",function(){return true;})
})
</script>

@endsection