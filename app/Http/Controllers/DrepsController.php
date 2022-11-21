<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateDrepsRequest;
use App\Http\Requests\UpdateDrepsRequest;
use App\Repositories\DrepsRepository;
use App\Models\Agent;

class DrepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    private $dRepos;
    private $nbre=15;

     public function __construct(DrepsRepository $dRepos)
     {
        $this->dRepos=$dRepos;
     }


    public function index()
    {
        $directions=$this->dRepos->getPaginate($this->nbre);
        $links=$directions->setPath('');
        return view("allDirections",compact('directions','links'));
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
    public function store(Request $request)
    {
        //
        if($request->ajax())
            {
                $this->validate($request,
                [
                    "nomDREPS"=>"required|string|min:5",
                    "nom1erResponsable"=>"required|string|min:2",
                    "prenom1erResponsable"=>"required|string|min:2",
                    "emploi1erResponsable"=>"required|string|min:5",
                    "titreHonorifique1resp"=>"required|string|min:10",
                   
                ]);
                $this->dRepos->store($request->all());
                return response()->json();
            }
            abort(404);
    }

    public function AdminDreps()
    {
        $directions=$this->dRepos->getPaginate($this->nbre);
        $links=$directions->setPath('');
        return view("allDirectionsAdmin",compact('directions','links'));
    }
    public function MinDreps()
    {
        $dreps=$this->dRepos->getPaginate($this->nbre);
        $links=$dreps->setPath('/npage');
        return view("MinDreps",compact('dreps','links'));

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
        $direction=$this->dRepos->getById($id);
        return $direction;
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
        $direction=$this->dRepos->getById($id);
        return $direction;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * |unique:les_agents,matricule,'.$id,
     */
    public function update(Request $request, $id)
    {
        if($request->ajax())
            {
                $this->validate($request,
                [
                    "nomDREPS"=>"required|string|min:5",
                    "nom1erResponsable"=>"required|string|min:2",
                    "prenom1erResponsable"=>"required|string|min:2",
                    "emploi1erResponsable"=>"required|string|min:5",
                    "titreHonorifique1resp"=>"required|string|min:10",
                   
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
        //
        $this->dRepos->destroy($id);
        return "OK";
    }
}
