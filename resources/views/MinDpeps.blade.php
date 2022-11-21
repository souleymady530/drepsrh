@extends("templateMin")

@section("contenu")


<div class="row" class="PanDreps">
<div class="card shadow mb-4" >
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
                                      @foreach($dpeps as $dir)
                                      @if($dir->nomDPEPS=="DREPS")
                                        <tr>
                                                <td>{{$dir->id}}</td>
                                                <td>{{$dir->nomDPEPS}}</td>
                                                <td>{{$dir->DREPS}}</td>
                                                <td>{{$dir->nom1erResponsable}} {{$dir->prenom1erResponsable}}</td>
                                                <td>{{$dir->emploi1erResponsable}}</td>
                                                <td>{{$dir->titreHonorifique1resp}}</td>

                                                <td>
                                                
                                                    <input type="button" class="btn btn-primary btnModif" value="Agents" id="{{$dir->id}}"/>
                                            
                                        
                                            
                                                </td>
                                                <td>
                                               
                                    
                                        
                                            </td>
                                            
                                        
                                            </tr>
                                        @else
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
                                        @endif
                                     
                                      @endforeach
                                     
                                    </tbody>
                                   
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    {{$links}}
</div>
