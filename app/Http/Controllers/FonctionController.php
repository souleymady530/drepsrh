<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFonctionRequest;
use App\Http\Requests\UpdateFonctionRequest;
use App\Repositories\FonctionRepository;
use App\Models\Fonction;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $fRepos;
    protected $nbre=15;
    public function  __construct(FonctionRepository $fRepos)
    {
        $this->fRepos=$fRepos;
    }


    public function index()
    {
        $fonctions=$this->fRepos->getPaginate($this->nbre);
        $links=$fonctions->setPath('');

        return view("AllFonction",compact("fonctions","links"));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFonctionRequest $request)
    {
        //
        $this->fRepos->store($request->all());
        return "OPERATION REUSSIE";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $fonction=$this->fRepos->getById($id);
        return $fonction;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFonctionRequest $request, $id)
    {
        //
        $this->fRepos->update($id,$request->all());
        return "OPERATIONB REUSSIE";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->fRepos->destroy($id);
        return "OPERATION REUSSIE";
    }
}
