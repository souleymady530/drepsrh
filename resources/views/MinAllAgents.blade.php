@extends("templateMin")

@section("contenu")

<div class="row">
    <input type="button" class="btn btn-success btnAdd" value="Ajouter Un Agent"/>
    <input type="button" class="btn btn-warning" value="Actualiser la liste"/>
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
                                            <th>Nom de l'agent'</th>
                                            <th>Opérations</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      
                                    
                                     
                                      <tr>
                                            <td>1</td>
                                            <td>A</td>
                                            <td><input type="button" class="btn btn-primary" value="Voir"/><input type="button" class="btn btn-warning" value="Modifier"/><input type="button" class="btn btn-danger" value="Supprimer"/></td>
                                        </tr>
                                    </tbody>

                                
                </table>
            </div>
        </div>
    </div>
</div>

@if($errors!=[])
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pan" >
@else

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pan" >
@endif

        <input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">



<div class=" bodyPan">
    <form method="post" action="{{Route('Agent.store')}}"  class="form">
    @csrf 
        <div class="InfoPerso">
            <label class="form form-control" style="border:none">Nom</label>
            <input type="text" name="nomAgent" class="form form-control">
           
            @if ($errors->has('nomAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomAgent') }}</strong>
                                    </span>
                                @endif


            <label class="form form-control" style="border:none">Prénom</label>
            <input type="text" name="prenomAgent" class="form form-control">
            @error('prenomAgent')
				<div class="invalid-feedback">{{ $message }}</div>
			@enderror



            <br/>


            <label class="form form-control" style="border:none">Sexe</label>
            <select name="sexeAgent" class="form form-control">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
                <option value="Indeterminé">Indeterminé</option>
                
            </select>
           
            @if ($errors->has('sexeAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sexeAgent') }}</strong>
                                    </span>
                                @endif




<br/>


            <label class="form form-control" style="border:none">Date de Naissance</label>
            <input type="date" name="DateDeNaissanceAgent" class="form form-control">
           
            @if ($errors->has('DateDeNaissanceAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DateDeNaissanceAgent') }}</strong>
                                    </span>
                                @endif

            <br/>



            <label class="form form-control" style="border:none">Lieu De Naissance</label>
            <input type="text" name="LieuDeNaissanceAgent" class="form form-control">
            

              
            @if ($errors->has('LieuDeNaissanceAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LieuDeNaissanceAgent') }}</strong>
                                    </span>
                                @endif
        </div>
<br/>



        <div class="InfoActuelle" >
            <label class="form form-control" style="border:none">Matricule de l'agent</label>
            <input type="text" name="matriculeAgent" class="form form-control">
           
            @if ($errors->has('matriculeAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('matriculeAgent') }}</strong>
                                    </span>
                                @endif

            <br/>




            <label class="form form-control" style="border:none">Titre Honorifique</label>
            <input type="text" name="Titrehonorifique" class="form form-control">
           
            @if ($errors->has('Titrehonorifique'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Titrehonorifique') }}</strong>
                                    </span>
                                @endif



<br/>
            <label class="form form-control" style="border:none">Date De Prise De Service (Lieu De Service Actuel)</label>
            <input type="date" name="DatePriseServiceLieuTravail" class="form form-control">
         
            @if ($errors->has('DatePriseServiceLieuTravail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DatePriseServiceLieuTravail') }}</strong>
                                    </span>
                                @endif



<br/>
          
            <input type="text" name="TypeDePersonnel" class="form form-control" value="MIN" hidden>
           



            <label class="form form-control" style="border:none">Lieu de travail</label>
            <input type="text" name="LieuDeTravailAgent" class="form form-control">
            

            
            @if ($errors->has('LieuDeTravailAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('LieuDeTravailAgent') }}</strong>
                                    </span>
                                @endif
            <br/>




            <label class="form form-control" style="border:none">Fonction Agent</label>
            <input type="text" name="FonctionAgent" class="form form-control">
         
            @if ($errors->has('FonctionAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('FonctionAgent') }}</strong>
                                    </span>
                                @endif


<br/>


            



            <label class="form form-control" style="border:none">Categorie De L'Agent</label>
            <input type="text" name="CategorieAgent" class="form form-control">
          

            @if ($errors->has('CategorieAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CategorieAgent') }}</strong>
                                    </span>
                                @endif



            <br/>



            <label class="form form-control" style="border:none">Echelle De L'Agent</label>
            <input type="text" name="EchelleAgent" class="form form-control">
        

            
            @if ($errors->has('EchelleAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EchelleAgent') }}</strong>
                                    </span>
                                @endif

<br/>




            <label class="form form-control" style="border:none">Echelon De L'Agent</label>
            <input type="text" name="EchelonAgent" class="form form-control">
          
   
            @if ($errors->has('EchelonAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EchelonAgent') }}</strong>
                                    </span>
                                @endif
            <br/>




        </div>

            <div class="InfoAntecedent" >

                <label class="form form-control" style="border:none">Date De Deniere Decoration</label>
                <input type="date" name="DateDerniereDecoration" class="form form-control">
               

                @if ($errors->has('DateDerniereDecoration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DateDerniereDecoration') }}</strong>
                                    </span>
                                @endif


<br/>


                <label class="form form-control" style="border:none">Date D'Integration (Fonction Publique)</label>
                <input type="date" name="DateIntegrationFP" class="form form-control">
               

                @if ($errors->has('DateIntegrationFP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DateIntegrationFP') }}</strong>
                                    </span>
                                @endif



                <br/>


                <label class="form form-control" style="border:none">Emploi De L'Agent</label>
                <input type="text" name="EmploiAgent" class="form form-control">
               


                
                @if ($errors->has('EmploiAgent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EmploiAgent') }}</strong>
                                    </span>
                                @endif



<br/>


                <label class="form form-control" style="border:none">Dernier Diplome</label>
                <input type="text" name="DernierDiplomeAccademique" class="form form-control">
             

                @if ($errors->has('DernierDiplomeAccademique'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('DernierDiplomeAccademique') }}</strong>
                                    </span>
                                @endif

                <br/>

                <input type="Submit" Class="btn btn-success" value="Créer"/>
            </div>
        </form>
</div>



        <div class=" footerPan">
        <input type="button" class="btn btn-primary previewButton" value="<-Precedant">
            <input type="button" class="btn btn-primary nextButton " value="Suivant->" style="margin-left:85%">
            
        </div>

</div>









<style>
    
    .form
    {
        background-color:white;
        padding:10px;
    }

    .panfg 
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
    .btnFermer
    {
        margin-right:0px;
    }

</style>

<script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript">
    $(".btnAdd").click(function()
    {
        $(".pan").attr("hidden",function(){return false})
       
       // $(".pan").css({backgroundColor:"red",});
    })

    $(".btnFermer").click(function()
    {
        $(".pan").attr("hidden",function(){return true;})
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



</script>


@endsection

