<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommuneRequest;
use App\Http\Requests\UpdateCommuneRequest;
use App\Repositories\CommuneRepository;
use App\Models\Dpeps;


class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $cRepos;
    protected $nombre=15;

    public function __construct(CommuneRepository $CommRepos)
    {
    $this->cRepos=$CommRepos;
    }

    public function index()
    {
        $communes=$this->cRepos->getPaginate($this->nombre);
        $links=$communes->setPath('');
        $dpeps=Dpeps::all();
        return view("allCommune",compact("communes","links","dpeps"));
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
    public function store(Request $request)
    {
        if($request->ajax())
        {
            $this->validate($request,
            [
                "nomCommune"=>"required",
                "DPEPS"=>"required",
            ]);
            $this->cRepos->store($request->all());
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
        $commune=$this->cRepos->getById($id);
        return $commune;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        if($request->ajax())
        {
            $this->validate($request,
            [
                "nomCommune"=>"required",
                "DPEPS"=>"required",
            ]);

            $this->cRepos->update($id,$request->all());
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
        $this->cRepos->destroy($id);
        return "OK";
    }   
}       