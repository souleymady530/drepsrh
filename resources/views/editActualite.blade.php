@extends("templateAdmin")

@section("contenu")
<div class="pan col-lg-6 col-md-6 col-xs-12 col-sm-12">
<img src="../../{{$actualite['chemin']}}" width="400"/> 
</div>
<div class="pan col-lg-6 col-md-6 col-xs-12 col-sm-12">
      
        {!! Form::model($actualite, ['route' => ['Actualite.update', $actualite->id],'files'=>true, 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
        
        @csrf

        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Entrez un titre</label>
        <input type="text" name="titre" id="Titre" class="form form-control"  value="{{$actualite['titre']}}"    required/>
        



        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Choisir une image</label>
        <input type="file" name="chemin" id="chemin" class="form form-control"  value="">{{$actualite['chemin']}}</input><br/>

        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Ecrire un petit resumé</label>
        <textarea name="resume" id="resume" class="form form-control" rows="15" required/>
        {{$actualite['resume1']}}{{$actualite['resume2']}}{{$actualite['resume3']}}{{$actualite['resume4']}}{{$actualite['resume5']}}
    </textarea>
<br/>
        <label for="Emploi1erRespDPEPS" class="form form-control" style="border:none">Choisir la date</label>
        <input type="date" name="datePublication" id="datePublication" class="form form-control" value="{{$actualite['datePublication']}}" required/>

      
        <input type="submit" value="Ajouter" class="btn btn-success btnSend" >
    </form>
</div>






<style>
    .formd
    {
        background-color:white;
        padding:10px;
    }
    .pan
    {
        background-color:white;
        padding:5px;
        
       
        border:solid 2px rgb(192,192,192);
        border-radius:15px;
        
    }

    
    

</style>
@endsection

@section("ref")
../../
@endsection