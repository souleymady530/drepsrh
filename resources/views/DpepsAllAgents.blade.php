@extends("templateDpeps")

@section("contenu")
<div class="row">
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                        <div class="">
    <input type="button" class="btn btn-success btnAdd" value="Ajouter Un Agent"/>
    <input type="button" class="btn btn-primary btnImport" value="Importer une liste"/>
    <input type="button" class="btn btn-primary btnExporter" value="Exporter la liste"/>
    <hr/>
</div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                            <th>Matricule</th>
                                            <th>Nom & Prénom </th>
                                            <th>Date de naissance </th>
                                            <th>Genre </th>
                                            <th>Emploi</th>
                                            <th>Fonction</th>
                                            <th>Catégorie</th>
                                            <th>Lieu de travail</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($agents as $agt)
                                        <tr>
                                        <td>{{$agt->id}}</td>
                                            <td>{{$agt->matriculeAgent}}</td>
                                            <td>{{$agt->nomAgent}} {{$agt->prenomAgent}}</td>
                                            <td>{{$agt->DateDeNaissanceAgent}}</td>
                                            <td>{{$agt->sexeAgent}}</td>
                                            <td>{{$agt->EmploiAgent}}</td>
                                            <td>{{$agt->FonctionAgent}}</td>
                                            <td>{{$agt->CategorieAgent}}</td>
                                            <td>{{$agt->LieuDeTravailAgent}}</td>
                                            <td>
                                            <input type="button" class="btn btn-primary btnVoir" value="Voir" id="{{$agt->id}}"/><br/>
                                            <input type="button" class="btn btn-warning btnModif" value="Modifier" id="{{$agt->id}}"/>
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block " value="Supprimer" id="{{$agt->id}}" onclick="showPanConfirmation({{$agt->id}} )">
                                            
                                                                            
                                            </form></td>

                                        </tr>
                                     @endforeach
                                      
                                    </tbody>

                                
                </table>
            </div>
        </div>
    </div>
</div>

@if($errors!=[])
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pan" hidden>
@else

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pan" >
@endif

        <input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">



<div class="bodyPan">
    <form   class="form">
    @csrf 
        <div class="InfoPerso">
            <label class=" form-control" style="border:none">Nom</label>
            <input type="text" name="nomAgent" class=" form-control" id="nomAgent">
            <span class="help-block" id="error-nomAgent" hidden></span>
                                        
                                    
                            


            <label class=" form-control" style="border:none">Prénom</label>
            <input type="text" name="prenomAgent" class=" form-control" id="prenomAgent">
				<span class="invalid-feedback" id="error-prenomAgent" hidden></span>
	


        <input type="hidden" name="idCreateur" value="{{Auth::user()->id}}" id="idCreateur"/>


            <label class=" form-control" style="border:none">Sexe</label>
            <select name="sexeAgent" class="form-control" id="sexeAgent">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
                <option value="Indeterminé">Indeterminé</option>
                
            </select>
            <span class="help-block" id="error-sexeAgent" hidden> </span> 
 

            <label class=" form-control" style="border:none">Date de Naissance</label>
            <input type="date" name="DateDeNaissanceAgent" class=" form-control" id="DateDeNaissanceAgent">
            <span class="help-block" id="error-DateDeNaissanceAgent" hidden></span>
          
          
            <label class=" form-control" style="border:none">Lieu De Naissance</label>
            <input type="text" name="LieuDeNaissanceAgent" class=" form-control" id="LieuDeNaissanceAgent">
            <span class="help-block" id="error-LieuDeNaissanceAgent" hidden> </span>
                          
        </div>




        <div class="InfoActuelle"  hidden>
            <label class=" form-control" style="border:none">Matricule de l'agent</label>
            <input type="text" name="matriculeAgent" class=" form-control" id="matriculeAgent">
            <span class="help-block" id="error-matriculeAgent" hidden></span>
           
                                   
                                       
                                    
                               

            




            <label class=" form-control" style="border:none">Titre Honorifique</label>
            <input type="text" name="Titrehonorifique" class=" form-control" id="Titrehonorifique">
            <span class="help-block" id="error-Titrehonorifique" hidden>      </span>
            
                                  
                                       
                              
                              




            <label class=" form-control" style="border:none">Date De Prise De Service (Lieu De Service Actuel)</label>
            <input type="date" name="DatePriseServiceLieuTravail" class=" form-control" id="DatePriseServiceLieuTravail">
            <span class="help-block" id="error-DatePriseServiceLieuTravail" hidden>       </span>
          
                                                                     
                                   
                               


            <label class=" form-control" style="border:none" for="TypeDePersonnel">Type de personnel</label>
             <select name="TypeDepersonnel" id="TypeDePersonnel" class="form-control">
               @foreach($typePersonnels as $tp)
                <option value="{{$tp->TypePersonnel}}">{{$tp->TypePersonnel}}</option>
                @endforeach
           </select>
            <span class="help-block" id="error-TypeDePersonnel" hidden>       </span>


          
            <input type="text" name="TypeAgent" class=" form-control" value="MIN" id="typeAgent" hidden>
           



            <label class=" form-control" style="border:none">Lieu de travail</label>
           
           
            <select name="LieuDeTravailAgent" class="form-control" id="LieuDeTravailAgent" >
                @foreach($lieuxDeTravail as $ldt)
                    <option value="{{$ldt->nomLieuDeTravail}}">{{$ldt->nomLieuDeTravail}}</option>
                @endforeach
            </select>
            <span class="help-block" id="error-LieuDeTravailAgent" ></span>
                                   
                                
                                
                              
            




            <label class="form-control" style="border:none">Fonction Agent</label>

            <select name="FonctionAgent" id="FonctionAgent" class="form-control" >
                @foreach($fonctions as $fct)
                    <option value="{{$fct->NomFonction}}">{{$fct->NomFonction}}</option>
                @endforeach
            </select>
           <span class="help-block" id="error-FonctionAgent" hidden></span>
       
                                   
                                       
                                    
                              





            



            <label class=" form-control" style="border:none">Categorie De L'Agent</label>
            <select name="CategorieAgent" id="CategorieAgent" class="form-control">
                @foreach($categories as $cate)
                    <option value="{{$cate->NomCategorie}}">{{$cate->NomCategorie}}</option>
                
                @endforeach
            </select>
             <span class="help-block" id="error-CategorieAgent" hidden></span>
                                        
                                    
                               


            



            <label class="form-control" style="border:none">Echelle De L'Agent</label>
            <select name="EchelleAgent" id="EchelleAgent" class="form-control">
                @for($index=1; $index<10; $index ++)
                    <option value="{{$index}}">{{$index}}</option>
                @endfor
            </select>


            <label class="form-control" style="border:none">Echellon De L'Agent</label>
            <select name="EchellonAgent" id="EchellonAgent" class="form-control">
                @for($index=1;$index<10;$index ++)
                    <option value="{{$index}}">{{$index}}</option>
                @endfor
            </select>            
            <span class="help-block" id="error-EchellonAgent" hidden></span>
   
                                   
                                      
                                    
                          
            




        </div>

            <div class="InfoAntecedent" hidden >

                <label class="form-control" style="border:none">Date De Deniere Decoration</label>
                <input type="date" name="DateDerniereDecoration" class=" form-control" id="DateDerniereDecoration">
                <span class="help-block" id="error-DateDerniereDecoration" hidden></span>

              
                                   
                                      
                                    
                               





                <label class="form form-control" style="border:none">Date D'Integration (Fonction Publique)</label>
                <input type="date" name="DateIntegrationFP" class="form-control" id="DateIntegrationFP">
                <span class="help-block" id="error-DateIntegrationFP" hidden> </span>

                <label class="form-control" style="border:none">Date De prise de service province region</label>
                <input type="date" name="DatePriseServiceProvinceRegion" class="form-control" id="DatePriseServiceProvinceRegion">
                <span class="help-block" id="error-DatePriseServiceProvinceRegion" hidden> </span>
                                   
                         
                <input type="text" name="typeAgent" class="form-control" id="typeAgent" value="MIN" hidden>
                                



           


                <label class="form-control" style="border:none">Emploi De L'Agent</label>

                <select name="EmploiAgent" id="EmploiAgent" class="form-control">
                    @foreach($emplois as $emp)
                        <option value="{{$emp->NomEmploi}}">{{$emp->NomEmploi}}</option>
                    @endforeach
                </select>
                <span class="help-block" i="error-EmploiAgent" hidden></span>


                
              
                                   
                                        
                                    
                               






                <label class="form-control" style="border:none">Dernier Diplome</label>
               <select name="DernierDiplomeAccademique" id="DernierDiplomeAccademique" class="form-control" >
                    @foreach($diplomes as $dip)
                        <option value="{{$dip->NomDiplome}}">{{$dip->NomDiplome}}</option>
                    @endforeach
               </select>
               <span class="help-block" id="error-DernierDiplomeAccademique" hidden></span>

               
               
              
                                    
                                        
                                    
                              
               

                <input type="Button" Class="btn btn-success btnSend" value="Ajouter" id="btnSend2" hidden/>
                <input type="Button" Class="btn btn-success btnUpdate" value="Valider" hidden/>
            </div>
        </form>
</div>



        <div class=" footerPan">
            <input type="button" class="btn btn-primary previewButton" value="<-Precedant" hidden>
            <input type="button" class="btn btn-primary nextButton " value="Suivant->" style="margin-left:85%">
            
        </div>

</div>

<div class="PanConfirmation"  style="width:450px;height:230px;position:relative;bottom:300px;left:150px;background-color:white;border:solid 1px rgb(192,192,192);box-shadow:10px 10px 10px rgb(233,234,238);" hidden>
<div style="background-color:rgb(230,68,53);height:40px;width:100%;color:white; text-align:center;">DREPS-RH| Information </div>
<br>
<div style="text-align:center;overflow:hidden;">Une fois supprimer il ne sera plus possible de restaurer.Il faudra recréer les données.Appuyez sur Confimer pour supprimer definitivement les données.</div><br/>
<hr/> 
<input type="button" class="btn btn-warning btnSupprimer" value="Confirmer" id="" style="position:relative;left:270px;top:-12px;"  />
<input type="button" class="btn btn-danger btnFermer" value="Fermer" id="" style="position:relative;left:270px;top:-12px;"  />

</div>


<div class="panImport col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
<input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
<form method="post" action="{{url('ImportAgent')}}" class= "form-horizontal" enctype="multipart/form-data">
        @csrf
        <label for="titre" class="form form-control" style="border:none">Entrez un titre(max:200 car.)</label>
        <input type="text" name="titre" id="titre" class="form form-control" required/>
        


        <label for="fichier" class="form form-control" style="border:none">Choisir le fichier</label>
        <input type="file" name="chemin" id="fichier" class="form form-control" required/>

        

       
        <input type="submit" value="Valider" class="btn btn-success" >
    </form>
</div>


<div class="panExpoter col-lg-4 col-md-4 col-xs-12 col-sm-12" hidden>
    <input type="button" class="btn btn-danger btnFermer" value="FERME X" style="margin-left:85%">
    OPERATION REUISSIE! Cliquez pour telecharger le fichier
    <a href=><input type="button" class="btn btn-primary" value="Telecharger"/></a>
</div>





<style>
    .panImport, .panExpoter
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


    .help-block
    {
        color:red;
        margin:15px;
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
        var isUpdate=false;
         let level="I"
         var idAgent=-1;
         $(".btnExporter").click(function()
         {
            $.ajax(
            {
                url:"ExportAgent",
                type:"get",
                data:
                {

                },
                success:function(chemin)
                {
                    
                    $(".panExpoter a").attr("href",'http://drepsrh/public/Exports/'+chemin)
                    
                    $(".panExpoter").attr("hidden",false)
                },
                error:function(error)
                {
                    
                },
            })
        });

         $(".btnImport").click(function()
         {
                $(".panImport").attr("hidden",function(){return false;})
         })

    $(".btnAdd").click(function()
    {
        isUpdate=false
        level="I"
        hiddenAllLevel()
        reinitializeForm()
        $(".InfoPerso").attr("hidden",function(){return false;})
        $(".pan").attr("hidden",function(){return false})

        $("input[value=Ajouter]").attr("hidden",function(){return true})
            $(".nextButton").attr("hidden",function(){return false})
       // $(".pan").css({backgroundColor:"red",});
    })

    $(".btnFermer").click(function()
    {
        $(".pan").attr("hidden",true)
    
        $(".PanInformation").attr("hidden",function(){return true;});
        $(".panImport").attr("hidden",true)
        $(".panExpoter").attr("hidden",true)
        $(".PanConfirmation").attr("hidden",function(){return true;});
        
    })


    function hiddenAllLevel()
    {
        $(".InfoPerso").attr("hidden",function(){return true;})
            $(".InfoActuelle").attr("hidden",function(){return true;})
            $(".InfoAntecedent").attr("hidden",function(){return true;})
    }

   



 


    $(".nextButton").click(function()
    {
        
         


        if(level=="I")
        {

            hiddenAllLevel();
            $(".InfoActuelle").attr("hidden",function(){return false;})
            $(".previewButton").attr("hidden",function(){return false;}) 
            level="II";

        }
        else if(level=="II")
        {
            hiddenAllLevel();
            $(".InfoAntecedent").attr("hidden",function(){return false;})
            $(".previewButton").attr("hidden",function(){return false;}) 
            level="III";
          if(isUpdate==false)
          {
            $(".btnSend").attr("hidden",function(){return false})
            $(".btnUpdate").attr("hidden",function(){return true})
            $(".nextButton").attr("hidden",function(){return true})
          }
          else
          {

            $(".btnSend").attr("hidden",function(){return true})
            $(".nextButton").attr("hidden",function(){return true})
          }

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

    function showPanConfirmation(id)
         {
           // alert(id);
            $(".PanConfirmation").attr("hidden",function(){return false;})
         }



     //Button control for next
     $(".previewButton").click(function()
     {
        alert(niveau);
        if(level=="I")
        {

            hiddenAllLevel();
            level="I";


        }
        else if(level=="II")
        {
            hiddenAllLevel();
            level="I";
            $(".InfoPerso").attr("hidden",function(){return false;})
           
        }
        else if(level=="III")
        {
            hiddenAllLevel();
            $(".InfoActuelle").attr("hidden",function(){return false;})
            level="II";
            
        }
        else
        {
            hiddenAllLevel();
            level="I";
        }
        
          
    });


$(".btnSend").click(function()
{
    var 
    nomAgent=$("#nomAgent").val(),
    prenomAgent=$("#prenomAgent").val(),
    sexeAgent=$("#sexeAgent").val(),
    DateDeNaissanceAgent=$("#DateDeNaissanceAgent").val(),
    LieuDeNaissanceAgent=$("#LieuDeNaissanceAgent").val(),
    matriculeAgent=$("#matriculeAgent").val(),
    TitreHonorifique=$("#Titrehonorifique").val(),
    DatePriseServiceLieuTravail=$("#DatePriseServiceLieuTravail").val(),
    LieuDeTravailAgent=$("#LieuDeTravailAgent").val(),
    TypeDePersonnel=$("#TypeDePersonnel").val(),
    FonctionAgent=$("#FonctionAgent").val(),
    CategorieAgent=$("#CategorieAgent").val(),
    EchelleAgent=$("#EchelleAgent").val(),
    EchellonAgent=$("#EchellonAgent").val(),
    DateDerniereDecoration=$("#DateDerniereDecoration").val(),
    DatePriseServiceProvinceRegion=$("#DatePriseServiceProvinceRegion").val(),
    DateIntegrationFP=$("#DateIntegrationFP").val(),
    EmploiAgent=$("#EmploiAgent").val(),
    DernierDiplomeAccademique=$("#DernierDiplomeAccademique").val(),
    TypeAgent=$("#typeAgent").val(),
    idCreateur=$("#idCreateur").val();
    var token=$("input[name=_token]").val();

    /*alert(nomAgent)
    alert(prenomAgent)
     alert(sexeAgent) 
     alert(DateDeNaissanceAgent) 
     alert(LieuDeNaissanceAgent)
      alert(matriculeAgent)
       alert(TitreHonorifique)
        alert(DatePriseServiceLieuTravail)
         alert(LieuDeTravailAgent) 
         alert(TypeDePersonnel)
          alert(FonctionAgent)
           alert(CategorieAgent) 
           alert(EchelleAgent)
            alert(EchellonAgent) 
            alert(DateDerniereDecoration) 
            alert(DateIntegrationFP)
            alert(EmploiAgent) 
         alert(DatePriseServiceProvinceRegion)
            alert(DernierDiplomeAccademique) */

    $.ajax(
        {
            url:"{{Route('Agent.store')}}",
            type:"POST",
            data:
            {
                "_token":token,
                "nomAgent":nomAgent,
                'prenomAgent':  prenomAgent,
                "sexeAgent"  :sexeAgent,
                "DateDeNaissanceAgent":  DateDeNaissanceAgent,
                "LieuDeNaissanceAgent": LieuDeNaissanceAgent,
                "matriculeAgent":  matriculeAgent,
                "Titrehonorifique":  TitreHonorifique,
                "DatePriseServiceLieuTravail": DatePriseServiceLieuTravail,
                "LieuDeTravailAgent" :LieuDeTravailAgent,
                "TypeDePersonnel": TypeDePersonnel,
                "FonctionAgent" :FonctionAgent,
                "CategorieAgent"  : CategorieAgent,
                "EchelleAgent" :EchelleAgent,
                "EchellonAgent" :EchellonAgent,
                "DateDerniereDecoration" :DateDerniereDecoration,
                "DateIntegrationFP" :DateIntegrationFP,
                "EmploiAgent"  :EmploiAgent,
                "DernierDiplomeAccademique":  DernierDiplomeAccademique,
               'DatePriseServiceProvinceRegion':DatePriseServiceProvinceRegion,
               'TypeAgent':TypeAgent,
               'idCreateur':idCreateur,
            },
            success:function(response)
            {
                
            },
            error:function(data)
            {
                
                $.each(data.responseJSON.errors,function(i,error)
                    {
                       
                        returnAtLevelI();
                        $("#error-"+i).attr("hidden",function(){return false;})
                        $("#error-"+i).text(error[0]);
                    })

            },
        });
        
    
})

function returnAtLevelI()
{
    level="I"
                        hiddenAllLevel()
                        $(".InfoPerso").attr("hidden",function(){return false;})
                        $(".pan").attr("hidden",function(){return false})

                        $("input[value=Ajouter]").attr("hidden",function(){return true})
                            $(".nextButton").attr("hidden",function(){return false})

}

$(".btnModif").click(function(event)
{
    var id=event.target.id
    $("#btnSend2").attr("hidden",function(){return true;})
    isUpdate=true
    $.ajax(
        {
            url:"Agent/"+id+"/edit",
            type:"get",
            data:
            {

            },
            success:function(agent)
            {
               idAgent=id;
                $(".pan").attr("hidden",function(){return false;})
                $("#nomAgent").val(agent["nomAgent"]),
                $("#prenomAgent").val(agent["prenomAgent"]),
                $("#sexeAgent").val(agent["sexeAgent"]),
                $("#DateDeNaissanceAgent").val(agent["DateDeNaissanceAgent"]),
                $("#LieuDeNaissanceAgent").val(agent["LieuDeNaissanceAgent"]),
                $("#matriculeAgent").val(agent["matriculeAgent"]),
                $("#Titrehonorifique").val(agent["Titrehonorifique"]),
                $("#DatePriseServiceLieuTravail").val(agent["DatePriseServiceLieuTravail"]),
                $("#LieuDeTravailAgent").val(agent["LieuDeTravailAgent"]),
                $("#TypeDePersonnel").val(agent["TypeDePersonnel"]),
                $("#FonctionAgent").val(agent["FonctionAgent"]),
                $("#CategorieAgent").val(agent["CategorieAgent"]),
                $("#EchelleAgent").val(agent["EchelleAgent"]),
                $("#EchellonAgent").val(agent["EchellonAgent"]),
                $("#DateDerniereDecoration").val(agent["DateDerniereDecoration"]),
                $("#DatePriseServiceProvinceRegion").val(agent["DateIntegrationFP"]),
                $("#DateIntegrationFP").val(agent["DateIntegrationFP"]),
                $("#EmploiAgent").val(agent["EmploiAgent"]),
                $("#DernierDiplomeAccademique").val(agent["DernierDiplomeAccademique"]);    
                $(".btnUpdate").attr("hidden",function(){return false;})
                
            },
            errors:function(data)
            {

            }
        }
    )
})

function reinitializeForm()
{
                $("#nomAgent").val("");
                $("#prenomAgent").val("");
                $("#sexeAgent").val("");
                $("#DateDeNaissanceAgent").val("");
                $("#LieuDeNaissanceAgent").val("");
                $("#matriculeAgent").val("");
                $("#Titrehonorifique").val("");
                $("#DatePriseServiceLieuTravail").val("");
                $("#LieuDeTravailAgent").val("");
                $("#TypeDePersonnel").val("");
                $("#FonctionAgent").val("");
                $("#CategorieAgent").val("");
                $("#EchelleAgent").val("");
                $("#EchellonAgent").val("");
                $("#DateDerniereDecoration").val("");
                $("#DatePriseServiceProvinceRegion").val("");
                $("#DateIntegrationFP").val("");
                $("#EmploiAgent").val("");
                $("#DernierDiplomeAccademique").val("");    

}

$(".btnUpdate").click(function()
{
    var 
    nomAgent=$("#nomAgent").val(),
    prenomAgent=$("#prenomAgent").val(),
    sexeAgent=$("#sexeAgent").val(),
    DateDeNaissanceAgent=$("#DateDeNaissanceAgent").val(),
    LieuDeNaissanceAgent=$("#LieuDeNaissanceAgent").val(),
    matriculeAgent=$("#matriculeAgent").val(),
    TitreHonorifique=$("#Titrehonorifique").val(),
    DatePriseServiceLieuTravail=$("#DatePriseServiceLieuTravail").val(),
    LieuDeTravailAgent=$("#LieuDeTravailAgent").val(),
    TypeDePersonnel=$("#TypeDePersonnel").val(),
    FonctionAgent=$("#FonctionAgent").val(),
    CategorieAgent=$("#CategorieAgent").val(),
    EchelleAgent=$("#EchelleAgent").val(),
    EchellonAgent=$("#EchellonAgent").val(),
    DateDerniereDecoration=$("#DateDerniereDecoration").val(),
    DatePriseServiceProvinceRegion=$("#DatePriseServiceProvinceRegion").val(),
    DateIntegrationFP=$("#DateIntegrationFP").val(),
    EmploiAgent=$("#EmploiAgent").val(),
    DernierDiplomeAccademique=$("#DernierDiplomeAccademique").val();
    var token=$("input[name=_token]").val();
    
/*
    alert(nomAgent)
    alert(prenomAgent)
     alert(sexeAgent) 
     alert(DateDeNaissanceAgent) 
     alert(LieuDeNaissanceAgent)
      alert(matriculeAgent)
       alert(TitreHonorifique)
        alert(DatePriseServiceLieuTravail)
         alert(LieuDeTravailAgent) 
         alert(TypeDePersonnel)
          alert(FonctionAgent)
           alert(CategorieAgent) 
           alert(EchelleAgent)
            alert(EchellonAgent) 
            alert(DateDerniereDecoration) 
            alert(DateIntegrationFP)
            alert(EmploiAgent) 
         alert(DatePriseServiceProvinceRegion)
            alert(DernierDiplomeAccademique) 
*/
    $.ajax(
        {
            url:"Agent/"+idAgent,
            type:"PUT",
            data:
            {
                "id":idAgent,
                "_token":token,
                "nomAgent":nomAgent,
                'prenomAgent':  prenomAgent,
                "sexeAgent"  :sexeAgent,
                "DateDeNaissanceAgent":  DateDeNaissanceAgent,
                "LieuDeNaissanceAgent": LieuDeNaissanceAgent,
                "matriculeAgent":  matriculeAgent,
                "Titrehonorifique":  TitreHonorifique,
                "DatePriseServiceLieuTravail": DatePriseServiceLieuTravail,
                "LieuDeTravailAgent" :LieuDeTravailAgent,
                "TypeDePersonnel": TypeDePersonnel,
                "FonctionAgent" :FonctionAgent,
                "CategorieAgent"  : CategorieAgent,
                "EchelleAgent" :EchelleAgent,
                "EchellonAgent" :EchellonAgent,
                "DateDerniereDecoration" :DateDerniereDecoration,
                "DateIntegrationFP" :DateIntegrationFP,
                "EmploiAgent"  :EmploiAgent,
                "DernierDiplomeAccademique":  DernierDiplomeAccademique,
               'DatePriseServiceProvinceRegion':DatePriseServiceProvinceRegion,
            },
            success:function(response)
            {
                $(".pan").attr("hidden",function(){return true;})
            },
            error:function(data)
            {
                
                $.each(data.responseJSON.errors,function(i,error)
                    {
                       
                        //returnAtLevelUpdateI();
                        $("#error-"+i).attr("hidden",function(){return false;})
                        $("#error-"+i).text(error[0]);
                    })

            },
        });
        
        isUpdate=false;
})

$(".btnSupprimer").click(function(event)
{
   
        var idAgent=event.target.id
        var token=$(".frmSup  input[name=_token]").val();
        alert(token);
        $.ajax(
            {
                url:"Agent/"+idAgent,
                type:"DELETE",
                data:
                {
                    "id":idAgent,
                    "_token":token,
                    
                },
                success:function(response)
                {
                
                },
                error:function(data)
                {
                    
                    $.each(data.responseJSON.errors,function(i,error)
                        {
                        
                            
                        })

                },
            }
        )
    
})
</script>

@endsection