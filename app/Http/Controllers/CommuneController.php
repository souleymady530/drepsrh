<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommuneRequest;
use App\Http\Requests\UpdateCommuneRequest;
use App\Repositories\CommuneRepository;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $ComRepos;
    protected $nombre=15;

    public function __construct(CommuneRepository $CommRepos)
    {
    $this->ComRepos=$CommRepos;
    }
    public function index()
    {
        $commune=$this->ComRepos->getPaginate($this->nombre);
        $links=$commune->setPath('');
        return view("allCommune",compact("commune","links"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("CreateCommune");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCommuneRequest $request)
    {
        $this->ComRepos->store($request->all());
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
        $commune=$this->ComRepos->getById($id);
        return view("Fichecommune",compact("commune"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $commune=$this->ComRepos->getById($id);
       return view("Editcommune",compact("commune"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommuneRequest $request, $id)
    {
        $this->ComRepos->update($id,$request->all());
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
        $this->ComRepos->Delete($id);
        return redirect()->back();
    }   
}       