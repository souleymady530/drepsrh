<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEmploiRequest;
use App\Http\Requests\UpdateEmploiRequest;
use App\Repositories\EmploiRepository;
use App\Models\Emploi;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $eRepos;
    protected $nbre=15;
    public function __construct(EmploiRepository $eRepos)
    {
        $this->eRepos=$eRepos;
    }


    public function index()
    {
        //
        $emplois=$this->eRepos->getPaginate($this->nbre);
        $links=$emplois->setPath('');

        return view("AllEmploi",compact("emplois","links"));
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
    public function store(CreateEmploiRequest $request)
    {
        //
        $this->eRepos->store($request->all());
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
        $emploi=$this->eRepos->getById($id);
        return $emploi;
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
    public function update(UpdateEmploiRequest $request, $id)
    {
        //
        $this->eRepos->update($id,$request->all());
        return "OPERATION REUSSIE";
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
        $this->eRepos->destroy($id);
        return "OPERATION REUSSIE";
    }
}
