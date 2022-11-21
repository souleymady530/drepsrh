@extends("templateDpeps")

@section("contenu")


<div class=" row PanEts" >
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des Etablissments de la DPEPS</h6>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <div id="PanBtnEts"></div>
                           
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                          
                                            <th>Etablissement</th>
                                            <th>Localité</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody id="tbodyEts">
                                      @foreach($etablissements as $ets)
                                        <tr>
                                            <td>{{$ets->id}}</td>
                                            <td>{{$ets->nomEtablissement}}</td>
                                            <td>{{$ets->localite}}</td>
                                            <td><input type="button" class="btn btn-success btnVoirEts" value="Voir Les Agents" id="{{$ets->id}}"/></td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
</div>




<div class=" row PanAgents" hidden>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        

                        </div>
                        <div class="card-body">
                            <div id="PanBtnAgents">
                            </div><hr/>
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
                                            
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody id="tbodyAgent">
                                      
                                  
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    var fileAriane="";
//Utilitaire de retour et ses compagnons 
function retour()
    {
        desactivation();
        fileAriane="";
        $(".PanDreps .card-header").text("");
        $(".PanDpeps .card-header").text("");
        $(".PanEts .card-header").text("");
        $(".PanAgents .card-header").text("");
        $(".PanEts #PanBtnEts").text("");
        $(".PanDpeps #PanBtnDpeps").text("");
        $(".PanAgents #PanBtnAgents").text("");
        $(".PanEts").attr("hidden",function(){return false});
    }
  

    
    function desactivation()
    {
        $(".PanEts").attr("hidden",function(){return true});
        $(".PanDreps").attr("hidden",function(){return true});
        $(".PanDpeps").attr("hidden",function(){return true});
        $(".PanAgents").attr("hidden",function(){return true});
        $(".emptyPan").attr("hidden",function(){return true});
    }

$(".btnVoirEts").click(function(event)
{
    var id=event.target.id;
    $.ajax({
            url:"{{url('Agent-Ets')}}/"+id,
			type:'GET',
			data:
            {
				
			},
			success:function(Agents)
            {

                 $("#tbodyAgent").text("")
                if (Agents!='Nada')
                {
                        var i, taille=Agents.length;
                        for (i=0;i<taille;i++)
                        {
                            $("#tbodyAgent").append('<td>'+Agents[i]['id']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['matriculeAgent']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['nomAgent']+''+Agents[i]['prenomAgent']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['DateDeNaissanceAgent']+'</td>') 
                            $("#tbodyAgent").append('<td>'+Agents[i]['sexeAgent']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['EmploiAgent']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['FonctionAgent']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['CategorieAgent']+'</td>')
                            $("#tbodyAgent").append('<td>'+Agents[i]['LieuDeTravailAgent']+'</td>') ;
                        }

                    
                    $(".PanEts").attr("hidden",function(){return true;});
                    $(".PanAgents").attr("hidden",function(){return false;});
                   // $(".PanAgents .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">-->Les Agents</h6>') 

                   $.ajax({
                            url:"{{url('Ets')}}/"+id,
                            type:'GET',
                            data:
                            {
                                
                            },
                            success:function(etablissement)
                            {
                                //alert(dreps['prenom1erResponsable'])
                                
                                fileAriane=fileAriane+"/"+etablissement['nomEtablissement'];
                                
                                //$(".PanAgents .card-header").text("");
                                $(".PanAgents .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">'+fileAriane+'</h6>') 
                                $(".PanAgents #PanBtnAgents").append('<input type="button" class="btn btn-warning btnRetour" value="Retour" id="" onclick="retour()"/> ')

                            },
                            
                    });

                }
                else
                {
                        $(".emptyPan").attr("hidden",function(){return false;})
                }
            },
            
        });
})
</script>



@endsection