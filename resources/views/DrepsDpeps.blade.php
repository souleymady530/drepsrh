@extends("templateDreps")





@section("contenu")

<div class="row">
    <div class="card shadow mb-4 PanDpeps">
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
                                            
                                            <th>Premier Responsable</th>
                                            <th>Emploi Responsable</th>
                                            <th>Titre Responsable</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($dpeps as $dir)
                                     
                                        <tr>
                                            <td>{{$dir->id}}</td>
                                            <td>{{$dir->nomDPEPS}}</td>
                                          
                                            <td>{{$dir->nom1erRespDPEPS}} {{$dir->prenom1erRespDPEPS}}</td>
                                            <td>{{$dir->Emploi1erRespDPEPS}}</td>
                                            <td>{{$dir->titreHonor1respDPEPS}}</td>

                                            <td>
                                             
                                               
                                            <input type="button" class="btn btn-primary btn-block btnVoirEts" value="Voir plus" id="{{$dir->id}}">

                                       
                                          
                                            </td>
                                       <!--
                                            <form action="#" class="frmSup">
                                            @csrf
                                            <input type="button" class="btn btn-danger btn-block btnSupprimer" value="Supprimer" id="{{$dir->id}}">
                                            
                                                                            
                                            </form>-->
                                        
                                       
                                        </tr>
                                        
                                     
                                      @endforeach
                                     
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
                  
    </div>
</div>
<div class=" row PanEts" hidden>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                           
                            
                        </div>
                        <div class="card-body">
                            <div id="PanBtnEts">

                            </div>
                            <div class="table-responsive">
                            
                            <hr/>
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
                                            
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody id="tbodyAgent">
                                      
                                  
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
    </div>

</div>

<script type="text/javascript" src="js/jquery.js"></script>



<script type="text/javascript">
     var fileAriane="DPEPS";
function retour()
    {
        desactivation();
        fileAriane="DREPS";
        $(".PanDreps .card-header").text("");
        $(".PanDpeps .card-header").text("");
        $(".PanEts .card-header").text("");
        $(".PanAgents .card-header").text("");
        $(".PanEts #PanBtnEts").text("");
        $(".PanDpeps #PanBtnDpeps").text("");
        $(".PanAgents #PanBtnAgents").text("");
        $(".PanDpeps").attr("hidden",function(){return false});
    }

    function desactivation()
    {
        $(".PanEts").attr("hidden",function(){return true});
        $(".PanDreps").attr("hidden",function(){return true});
        $(".PanDpeps").attr("hidden",function(){return true});
        $(".PanAgents").attr("hidden",function(){return true});
        $(".emptyPan").attr("hidden",function(){return true});
    }

    ////////////////////////////////////////////////////////////////////////////////////////
$(".btnVoirEts").click(function(event)
{
    var idDpeps=event.target.id;
    $.ajax({
            url:"{{url('DPEPS-Ets')}}/"+idDpeps,
			type:'GET',
			data:{},
			success:function(Etablissments)
            {
                $("#tbodyEts").text("");

               if (Etablissments!='Nada')
               {
                    var index, taille=Etablissments.length;
                    for (index=0;index<taille;index++)
                    {
                        $("#tbodyEts").append("<tr>");
                        $("#tbodyEts").append('<td>'+Etablissments[index]['id']+'</td>')
                        $("#tbodyEts").append('<td>'+Etablissments[index]['nomEtablissement']+'</td>')
                        $("#tbodyEts").append('<td>'+Etablissments[index]['localite']+'</td>')

                        $("#tbodyEts").append('<td class="btnVoirPlusDpeps">    <input type="button" class="btn btn-primary " value="Voir Plus" id=""  onclick="afficherInfoAgentEts('+Etablissments[index]['id']+')"/>     </td>')   

                        $("#tbodyEts").append("</tr>");
                    }

                    $(".PanEts").attr('hidden',function(){return false;})
                    $(".PanDpeps").attr("hidden",function(){return true;})
                    
                    $(".PanEts #PanBtnEts").append('<input type="button" class="btn btn-warning btnRetour" value="RETOUR" id="" onclick="retour()"/>  <input type="button" class="btn btn-success" value="Voir Les Agents" onclick="afficherInfoAgentDpeps('+idDpeps+')"/>')
                
               }
               else
               {
                    $(".emptyPan").attr("hidden",function(){return false;})
               }
            }});

        $.ajax({
            url:"{{url('Dpeps')}}/"+idDpeps,
			type:'GET',
			data:
            {
				
			},
			success:function(dpeps)
            {
                //alert(dreps['prenom1erResponsable'])
              //alert(fileAriane)
                fileAriane=fileAriane+"/"+dpeps['nomDPEPS'];
                
                $(".PanEts .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id=""> -->'+fileAriane+'</h6>') 

            },

            
        });
})



function afficherInfoAgentDpeps(id)
{
    $.ajax({
            url:"{{url('Agent-Dpeps')}}/"+id,
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

                    $.ajax({
                            url:"{{url('Dpeps')}}/"+id,
                            type:'GET',
                            data:
                            {
                                
                            },
                            success:function(dpeps)
                            {
                                //alert(dreps['prenom1erResponsable'])
                                
                                fileAriane=fileAriane+"/"+dpeps['nomDPEPS'];
                                
                            //    $(".PanAgents .card-header").text("");
                                $(".PanAgents .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">-->'+fileAriane+'</h6>') 
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
}




function  afficherInfoAgentEts(id)
{
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
                                
                              //  $(".PanAgents .card-header").text("");
                                $(".PanAgents .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">-->'+fileAriane+'</h6>') 
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
}


</script>
@endsection

@section("ref")
/..
@endsection