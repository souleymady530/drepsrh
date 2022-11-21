<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateLocaliteRequest;
use App\Http\Requests\UpdateLocaliteRequest;
use App\Models\localite;
use App\Repositories\LocaliteRepository;
use App\Models\Commune;


class LocaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $nbre=15;
    protected $lRepos;

    public function __construct(LocaliteRepository $lRepos)
    {
        $this->lRepos=$lRepos;
    }



    public function index()
    {
        //
        $localites=$this->lRepos->getPaginate($this->nbre);
        $links=$localites->setPath('');
        $communes=Commune::all();
        return view("allLocalite",compact("localites","links",'communes'));
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
                "nomLocalite"=>"required|string|min:2",
                "Commune"=>"required",
            ]);
            $this->lRepos->store($request->all());
            return "Ok";

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
        //
        $localite=$this->lRepos->getById($id);
        return $localite;
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
    public function update(Request $request, $id)
    {
        //
       if($request->ajax())
       {
          $this->validate($request,
          [
            "nomLocalite"=>"required|string|min:2",
            "Commune"=>"required",
          ]) ;
          $this->lRepos->update($id,$request->all());
          return "OK"; 
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
        $this->lRepos->destroy($id);
        return "ok";
    }
}
