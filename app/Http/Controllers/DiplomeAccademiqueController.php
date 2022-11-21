<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateDiplomeRequest;
use App\Http\Requests\DiplomeAccademiqueUpdate;
use App\Repositories\DiplomeaccademiqueRepository;

class DiplomeAccademiqueController extends Controller
{
    /**
     * Afficher une liste de la ressource.
     * @return \Illuminate\Http\Response (retourne un objet de type reponse)
     */
    
     protected $dRepos; //Propriété de la classe Diplomeaccademique
     protected $nombre=15;//Propriété de la classe Diplomeaccademique
    public $message="";
    Public function __Construct(DiplomeaccademiqueRepository $diplorepos)
    {
        $this->dRepos=$diplorepos;
    }
    
     public function index()
    {
        $diplomes=$this->dRepos->getPaginate($this->nombre);
        $links=$diplomes->setPath('');
        return view("alldiplome",compact("diplomes","links"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("AjoutDiplome");
    }

    /*************************************************************************************************************************
     * ok*
     *********************************************************************************************************************
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request,
            [
                "NomDiplome"=>"required|unique:diplomeaccademique,NomDiplome", 
            ]);
            $this->dRepos->store($request->all());
            return response()->json();
        }
        abort(404);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diplome=$this->dRepos->getById($id);
        return $diplome;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * $this->bRepos->getById($id);
     */
    public function edit($id)
    {
        $diplome=$this->dRepos->getById($id);
        return $diplome;
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->ajax())
        {
            $this->validate($request,
            [
                "NomDiplome"=>"required|unique:diplomeaccademique,NomDiplome,".$id
            ]);
             $this->dRepos->update($id,$request->all());
             return response()->json();
        }
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dRepos->destroy($id);
        return "OPERATION REUSSIE";
    }
}
