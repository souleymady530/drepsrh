@extends("templateMin")


@section("contenu")

<div class="row PanDreps" >
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les DREPS</h6>
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
                                            <th>Voir Plus</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($dreps as $dir)
                                        @if($dir->nomDREPS!="Ministère")
                                            <tr>
                                                    <td>{{$dir->id}}</td>
                                                    <td>{{$dir->nomDREPS}}</td>
                                                    <td>{{$dir->nom1erResponsable}} {{$dir->prenom1erResponsable}}</td>
                                                    <td>{{$dir->emploi1erResponsable}}</td>
                                                    <td>{{$dir->titreHonorifique1resp}}</td>
                                                    <td><input type="button" class="btn btn-primary btnVoirDreps" value="Voir Plus" id="{{$dir->id}}"/></td>
                                                    <input type="hidden" value="{{$dir->nomDREPS}}" id="drepsId-{{$dir->id}}"/>
                                                    
                                                </tr>
                                        @endif
                                      @endforeach
                                     
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    {{$links}}
</div>


<div class="row PanDpeps" hidden>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                           
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="PanBtnDpeps">

                                </div>
                           
                            <hr/>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                          
                                            <th>DPEPS</th>
                                            <th>Premier Responsable</th>
                                            <th>Emploi</th>
                                            <th>Titre</th>
                                            <th>Voir Plus</th>
                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody id="tbody">
                                      
                                     
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    {{$links}}
</div>







<div class=" row PanEts" hidden>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div id="PanBtnEts">

                            </div>
                            
                        </div>
                        <div class="card-body">
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
                            
                        <div id="PanBtnAgents">

                        </div>

                        </div>
                        <div class="card-body">
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











<div class="emptyPan"  style="width:400px;height:180px;position:relative;bottom:300px;left:150px;background-color:white;border:solid 1px rgb(192,192,192);box-shadow:10px 10px 10px rgb(233,234,238);" hidden>
<div style="background-color:rgb(230,68,53);height:40px;width:100%;color:white; text-align:center;">DREPS-RH| Information </div>
<br>
<div style="text-align:center;">Il n'y a pas de donnée à afficher.</div><br/>
<hr/> 
<input type="button" class="btn btn-danger btnRetour" value="Fermer" id="" style="position:relative;left:310px;top:-12px;" onclick="retour()" />

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    var idDreps=0;var retournerA="panDreps";
    var fileAriane="";
    
    //Affiche tous les dpeps lieu a la dreps en question
    $(".btnVoirDreps").click(function(event)
    {
        id=event.target.id;
       dreps=$("#drepsId-"+id).val();
      
        


        $.ajax({
            url:"{{url('Dreps-Dpeps')}}/"+id,
			type:'GET',
			data:
            {
				
			},
			success:function(direction)
            {
                
                
                    if(direction!="NADA")
                    {

                        //Initailisation
                        $("#tbody").text("")
                       




                        idDreps=id;

                        
                        var i=0;
                        for(i=0;i<direction.length;i++)
                        {
                            if(direction[i]['nomDPEPS']==dreps)
                            {
                                fct="fctAgentDreps("+direction[i]['nomDPEPS']+",event)";
                                $("#tbody").append("<tr style='background-color:red;'>");
                                    $("#tbody").append("<td style='background-color:lightgreen;color:white;'>"+direction[i]['id']+"</td>");
                                    $("#tbody").append("<td style='background-color:lightgreen;color:white;'>"+direction[i]['nomDPEPS']+"</td>");
                                    $("#tbody").append("<td style='background-color:lightgreen;color:white;'>"+direction[i]['nom1erRespDPEPS']+" "+direction[i]['prenom1erRespDPEPS']+"</td>");
                                    $("#tbody").append("<td style='background-color:lightgreen;color:white;'>"+direction[i]['Emploi1erRespDPEPS']+"</td>");
                                    $("#tbody").append("<td style='background-color:lightgreen;color:white;'>"+direction[i]['titreHonor1respDPEPS']+"</td>");
                                    $("#tbody").append('<td style="background-color:lightgreen;color:white;" class="btnVoirPlusDpeps"> <input type="button" class="btn btn-primary btnVoirAgentDreps" value="Agent" id="'+direction[i]['DREPS']+'" onclick="afficherAgents('+direction[i]['DREPS']+')"/>  </td>')   
                                    $("#tbody").append("</tr>");


                            }
                            else
                            {
                                fct="fctAgentDreps("+direction[i]['nomDPEPS']+",event)";
                                $("#tbody").append("<tr>");
                                $("#tbody").append("<td>"+direction[i]['id']+"</td>");
                                $("#tbody").append("<td>"+direction[i]['nomDPEPS']+"</td>");
                               
                                $("#tbody").append("<td>"+direction[i]['nom1erRespDPEPS']+" "+direction[i]['prenom1erRespDPEPS']+"</td>");
                                $("#tbody").append("<td>"+direction[i]['Emploi1erRespDPEPS']+"</td>");
                                $("#tbody").append("<td>"+direction[i]['titreHonor1respDPEPS']+"</td>");
                                $("#tbody").append('<td class="btnVoirPlusDpeps">    <input type="button" class="btn btn-primary btnVoirDpeps" value="Voir Plus"   onclick="afficherEts('+direction[i]['id']+')"/>     </td>')   
                                $("#tbodyAgent").append("</tr>");
                            }
                          
                            
                           
                            
                        }
                        //desactivation du pan des dreps et affichage du pan des dpeps 
                        //$(".PanEts #PanBtnEts input[type=button]").remove("");
                        $(".PanDreps").attr("hidden",function(){return true})
                        $(".PanDpeps").attr("hidden",function(){return false})
                        
                        $(".PanDpeps #PanBtnDpeps").append('<input type="button" class="btn btn-warning btnRetour" value="Retour" id="" onclick="retour()"/> <input type="button" class="btn btn-success" value="Voir Les Agents" id="'+idDreps+'" onclick="AfficherInfoAgentDreps('+ {{Auth::user()->id}} +')"/>')
                       }
                    else
                    {
                        $(".emptyPan").attr("hidden",function(){return false;})
                    }
                   
               
               
			},
        })

        $.ajax({
            url:"{{url('Dreps')}}/"+id,
			type:'GET',
			data:
            {
				
			},
			success:function(dreps)
            {
                //alert(dreps['prenom1erResponsable'])
               fileAriane=dreps['nomDREPS'];

                $(".PanDpeps .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">-->'+fileAriane+'/</h6>')
            },
            
        });
    });




    


function afficherEts(idDpeps)
{
    retournerA="PanDpeps";
    $.ajax({
            url:"{{url('DPEPS-Ets')}}/"+idDpeps,
			type:'GET',
			data:{},
			success:function(Etablissments)
            {
               if (Etablissments!='Nada')
               {
                    var index, taille=Etablissments.length;
                    for (index=0;index<taille;index++)
                    {
                        $("#tbodyEts").append("<tr>");
                        $("#tbodyEts").append('<td>'+Etablissments[index]['id']+'</td>')
                        $("#tbodyEts").append('<td>'+Etablissments[index]['nomEtablissement']+'</td>')
                        $("#tbodyEts").append('<td>'+Etablissments[index]['localite']+'</td>')

                        $("#tbodyEts").append('<td class="btnVoirPlusDpeps">    <input type="button" class="btn btn-primary btnVoirDpeps" value="Voir Plus" id=""  onclick="afficherInfoAgentEts('+Etablissments[index]['id']+')"/>     </td>')   

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
            url:"{{url('Dpeps')}}/"+id,
			type:'GET',
			data:
            {
				
			},
			success:function(dpeps)
            {
                //alert(dreps['prenom1erResponsable'])
                
                fileAriane=fileAriane+"/"+dpeps['nomDPEPS'];
                
                $(".PanEts .card-header").text("");
                $(".PanEts .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">-->'+fileAriane+'</h6>') 
            },
            
        });
   
}


function afficherInfoAgentEts(id)
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

//ici on affiche les informations sur les agents de la dpeps
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


//on afficher les informations sur les agents de la dreps
function AfficherInfoAgentDreps(id)
{
   
    $.ajax({
            url:"{{url('Agent-Dreps')}}/"+id,
			type:'GET',
			data:{},
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

                  $(".PanDpeps").attr("hidden",function(){return true;});
                  $(".PanAgents").attr("hidden",function(){return false;});

                  $.ajax({
                            url:"{{url('Dreps')}}/"+id,
                            type:'GET',
                            data:
                            {
                                
                            },
                            success:function(dreps)
                            {
                                //alert(dreps['prenom1erResponsable'])
                                
                                fileAriane=fileAriane+"/"+dreps['nomDREPS'];
                                
                              //  $(".PanAgents .card-header").text("");
                                $(".PanAgents .card-header").append('<h6 class="m-0 font-weight-bold text-primary" id="">-->'+fileAriane+'</h6>') 
                                $(".PanAgents #PanBtnAgents").append('<input type="button" class="btn btn-warning btnRetour" value="Retour" id="" onclick="retour()"/>')

                            },
                            
                        });
               }
               else
               {
                     $(".emptyPan").attr("hidden",function(){return false;})
               }
        }})
}


function afficherAgents(idDreps)
{
         $.ajax({
            url:"{{url('Agent-Dreps')}}/"+idDreps,
			type:'GET',
			data:{},
			success:function(Agents)
            {
               if (Agents!='NADA')
               {
                    var index, taille=Agents.length;
                    for (index=0;index<taille;index++)
                    {
                        $("#tbodyAgent").append('<td>'+Agents[i]['id']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['matriculeAgent']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['nomAgent']+''+Agents[i]['prenomAgent']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['DateDeNaissance']+'</td>') 
                        $("#tbodyAgent").append('<td>'+Agents[i]['sexeAgent']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['EmploiAgent']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['FonctionAgent']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['Categorie']+'</td>')
                        $("#tbodyAgent").append('<td>'+Agents[i]['LieuDeTravailAgent']+'</td>') ;
                    }

                  
               }
               else
               {
                     $(".emptyPan").attr("hidden",function(){return false;})
               }
        }})
}

    function fctAgentDreps(event)
    {
        
       
        $.ajax({
            url:"{{url('Agent-Dreps')}}/"+idDreps,
			type:'GET',
			data:{},
			success:function(Agents)
            {
               if (Agents!='NADA')
               {
                    var index, taille=Agents.length;
                    for (index=0;index<taille;index++)
                    {

                    }
               }
               else
               {
                $(".emptyPan").attr("hidden",function(){return false;})
               }
            }})
      
    }



   /* $('.btnRetour').click(function(){
        desactivation();
        fileAriane="DREPS/";
        $(".PanDreps .card-header").text("");
        $(".PanDpeps .card-header").text("");
        $(".PanEts .card-header").text("");
        $(".PanDreps").attr("hidden",function(){return false});
    })
*/


////////////////////////////////////////////////////////////////////////
//Utilitaire de retour et ses compagnons 
    function retour()
    {
        desactivation();
        fileAriane="DREPS/";
        $(".PanDreps .card-header").text("");
        $(".PanDpeps .card-header").text("");
        $(".PanEts .card-header").text("");
        $(".PanAgents .card-header").text("");
        $(".PanEts #PanBtnEts").text("");
        $(".PanDpeps #PanBtnDpeps").text("");
        $(".PanAgents #PanBtnAgents").text("");
        $(".PanDreps").attr("hidden",function(){return false});
    }
  

    
    function desactivation()
    {
        $(".PanEts").attr("hidden",function(){return true});
        $(".PanDreps").attr("hidden",function(){return true});
        $(".PanDpeps").attr("hidden",function(){return true});
        $(".PanAgents").attr("hidden",function(){return true});
        $(".emptyPan").attr("hidden",function(){return true});
    }
</script>
@endsection
