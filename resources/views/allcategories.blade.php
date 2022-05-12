@extends('template')
@section("titre")
Catégories
@endsection
@section("contenu")
<div class="row">
<input type="button" class="btn btn-primary" value="Créer une categorie"/>

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
                                            <th>Nom de la catégorie</th>
                                            <th>Opérations</th>

                                        </tr>
                                    </thead>
                                   
                                     
                                    <tbody>
                                      @foreach($categories as $cate)
                                      <tr>
                                            <td>{{$cate->id}}</td>
                                            <td>{{$cate->nom}}</td>
                                            <td>
                                                <input type="button" class="btn btn-primary" value="Voir"/>
                                            <input type="button" class="btn btn-warning" value="Modifier"/>
                                            <input  type="button" class="btn btn-danger" value="Supprimer"/></td>
                                        </tr>
                                      @endforeach
                                      <tr>
                                            <td>1</td>
                                            <td>A</td>
                                            <td><input type="button" class="btn btn-primary" value="Voir"/><input type="button" class="btn btn-warning" value="Modifier"/><input type="button" class="btn btn-danger" value="Supprimer"/></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                            <th>Nom de la catégorie</th>
                                            <th>Opérations</th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>


@endsection