@extends("templateMin")


@section("contenu")

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste complete</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="trTh">
                                            <th>Region</th>
                                            <th>Premier Responsablr</th>
                                            <th>Emploi Premiere Responsable</th>
                                            <th>Titre</th>
                                            <th>Voir Plus</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        @foreach($directions as $dir)
                                        <tr>
                                            <td>{{$dir->nomDreps}}</td>
                                            <td>{{$dir->prenom1erResponsable}} {{$dir->nom1erResponsable}}</td>
                                            <td>{{$dir->Emploi1erResponsable}}</td>
                                            <td>{{$dir->titreHonorifique1resp}}</td>
                                            <td>{{$dir->id}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection

<style>
    .trTh th 
    {
        text-align:center;
    }
</style>