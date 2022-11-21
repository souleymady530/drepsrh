<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etablissement;
use App\Repositories\EtsRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\localite;
use App\Models\DPEPS;

class EtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $eRepos;
    protected $nbre=15;
    public function __construct(EtsRepository $eRepos)
    {
        $this->eRepos=$eRepos;
    }

    public function EtsForDpeps()
    {
        $idDpeps=Auth::user()->id;
        $etablissements=Etablissement::where('idDpeps','=',$idDpeps)->get();
        return view("DpepsAllEts",compact("etablissements"));
    }

    public function Dpeps_ets($id)
    {
        $ets=Etablissement::where('id','=',$id)->get();
        return $ets!="[]" ? $ets:"Nada" ;
    }

    public function index()
    {
        
        
    }

    public function AdminEts()
    {
        $dpeps=Dpeps::all();
        $etablissements=$this->eRepos->getPaginate($this->nbre);
        $links=$etablissements->setPath("");
        $localites=localite::all();

        return view("AllEts",compact("etablissements","links","localites","dpeps"));
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
                "nomEtablissement"=>"required|unique:etablissements,nomEtablissement",
                "localite"=>"required",
            ]);
                $this->eRepos->store($request->all());
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
        //
        $localite=$this->eRepos->getById($id);
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
        
        if($request->ajax())
        {
           

            $this->validate($request,
            [
                "nomEtablissement"=>"required|unique:etablissements,nomEtablissement,".$id,
                "localite"=>"required",
            ]);
                $this->eRepos->update($id,$request->all());
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
        $this->eRepos->destroy($id);
        return "ok";
    }
}
