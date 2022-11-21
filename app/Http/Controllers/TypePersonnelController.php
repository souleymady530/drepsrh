<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTypepersonnelRequest;
use App\Http\Requests\UpdateTypepersonnelRequest;
use App\Models\typepersonnel;
use App\Repositories\TypePersonnelRepository;



class TypePersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $tRepos;
     protected $nbre=15;
     public function __construct(TypePersonnelRepository $tRepos)
     {
         $this->tRepos=$tRepos;
     }

    public function index()
    {
        //
        $typePersonnels=$this->tRepos->getPaginate($this->nbre);
        $links=$typePersonnels->setPath('');
        return view("allTypePersonnel",compact("typePersonnels","links"));
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
    public function store(CreateTypepersonnelRequest $request)
    {
        //
        $this->tRepos->store($request->all());
        return "Ok";
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
        $typePersonnel=$this->tRepos->getById($id);
        return $typePersonnel;
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
    public function update(UpdateTypepersonnelRequest $request, $id)
    {
        //
        $this->tRepos->update($id,$request->all());
        return "OK";
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
        $this->tRepos->destroy($id);
        return "ok";
    }
}
