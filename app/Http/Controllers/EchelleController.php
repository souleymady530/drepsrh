<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEchelleRequest;
use App\Http\Requests\UpdateEchelleRequest;
use App\Repositories\EchelleRepository;
use App\Models\Echelle;



class EchelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $eRepos;
    protected $nbrePerPage=15;
    public function __copnstruct(EchelleRepository $eRepos)
    {
        $this->eRepos=eRepos;
    }

    public function index()
    {
        //
        $ehelles=$this->eRepos->getPaginate($this->nbre);
        $links=$echelles->setPath('');

        return view("AllEchelle",compact("echelles","links"));
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
    public function store(CreateEchelleRequest $request)
    {
        //
        $this->eRepos->store($requets-all());
      
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
        $echelle=$this->eRepos->getById($id);
       // return $echelle;
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
        $echelle=$this->eRepos->getById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEchelleRequest $request, $id)
    {
        $this->eRepos->update($id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->eRepos->delete($id);
    }
}
