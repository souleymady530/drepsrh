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
                                            <th>chemin</th>
                                            <th>Titre</th>
                                            <th>Apercu</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($fotos as $foto)
                                      <tr>
                                            <td>{{$foto->id}}</td>
                                            <td>{{$foto->chemin}}</td>
                                            <td>{{$foto->titre}}</td>
                                            <td><img src="{{$foto->chemin}}" alt="img source" width="200"/></td>
                                            <td>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['Gallery.destroy', $foto->id]]) !!} 
                                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block']) !!}
								            {!! Form::close() !!}
                                               
                                                
                                          
                                            </td>
                                        
                                       
                                        </tr>
                                      @endforeach
                                     
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    
</div>

<div class="pan col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
<form method="post" action="{{Route('Gallery.store')}}" class= "form-horizontal" enctype="multipart/form-data">
        @csrf
        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Entrez un titre</label>
        <input type="text" name="titre" id="Titre" class="form form-control" required/>
        



        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Choisir une image</label>
        <input type="file" name="chemin" id="Titre" class="form form-control" required/>

        


      
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