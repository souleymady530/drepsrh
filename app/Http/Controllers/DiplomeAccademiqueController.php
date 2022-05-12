<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateDiplomeRequest;
use App\Http\Requests\UpdateDiplomeRequest;
use App\Repositories\DiplomeaccademiqueRepository;

class DiplomeAccademiqueController extends Controller
{
    /**
     * Afficher une liste de la ressource.
     * @return \Illuminate\Http\Response (retourne un objet de type reponse)
     */
    
     protected $drepos; //Propriété de la classe Diplomeaccademique
     protected $nombre=15;//Propriété de la classe Diplomeaccademique

    Public function __Construct(DiplomeaccademiqueRepository $diplorepos)
    {
        $this->drepos=$diplorepos;
    }
    
     public function index()
    {
        $diplomes=$this->drepos->getPaginate($this->nombre);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiplomeRequest $request)
    {
        $this->dRepos->store($request->all());
        return view("StoreConfirmRegistration");
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
        return view("FicheDiplome",compact("diplome"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diplome=$this->drepos->getById($id);
        return view("ModifDiplome",compact("diplome"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiplomeRequest $request, $id)
    {
        $this->dRepos->update($id,$request->all());
        return view("UpdateConfirmRegistration");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->dRepos->Delete($id);
        return redirect()->back();
    }
}
