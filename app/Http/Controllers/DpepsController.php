<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateDpepsRequest;
use App\Http\Requests\UpdateDpepsRequest;
use App\Repositories\DpepsRepository;
use App\Models\Dpeps;
use App\Models\Dreps;
use Illuminate\Support\Facades\Auth;

class DpepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


        private $dRepos;
        private $nbre=15;
         public function __construct(DpepsRepository $dRepos)
         {
            $this->dRepos=$dRepos;
         }



    public function index()
    {
        //
        $directions=$this->dRepos->getPaginate($this->nbre);
        $links=$directions->setPath('');
        
        return view("MinAllDirectionsP",compact('directions','links'));
    }

    public function MinDpeps()
    {
        $dpeps=$this->dRepos->getPaginate($this->nbre);
        $links=$dpeps->setPath("/npagedpeps");
        return view("MinDpeps",compact('dpeps',"links"));
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
                    "nomDPEPS"=>"required",
                    "nom1erRespDPEPS"=>"required",
                    "prenom1erRespDPEPS"=>"required",
                    "Emploi1erRespDPEPS"=>"required",
                    "DREPS"=>"required",
            ]);
            $this->dRepos->store($request->all());
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
        $dpeps=$this->dRepos->getById($id);
        return $dpeps;
        
    }

    public function AdminDpeps()
    {
        $directions=Dreps::join("Dpeps","Dreps.id","=","dpeps.dreps")->paginate($this->nbre);
        $this->dRepos->getPaginate($this->nbre);
        $links=$directions->setPath('');
        $dreps=Dreps::all();

        return view("AllDirectionsProvincial",compact('directions','links','dreps'));
    }

    /**
     * Show the form for editing the specified resource.
     *join("clients","lesreservations.idcinephile","=","clients.id")->select()->get();
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dpeps=$this->dRepos->getById($id);
        return $dpeps;
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
                "nomDPEPS"=>"required|unique:dpeps,nomDPEPS,".$id,
                "nom1erRespDPEPS"=>"required",
                "prenom1erRespDPEPS"=>"required",
                "Emploi1erRespDPEPS"=>"required",
                "DREPS"=>"required",
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
    public function DpepsForDreps($id)
    {
        
        $dpeps=Dpeps::where("DREPS","=",$id)->get();
        //$dpeps=$this->dRepos->getpaginate($this->nbre);
        //$links=$dpeps->setPath("MinDpeps");
        //$tableau[0]=$dpeps;
        //$tableau[1]=$links;
        //join("users","les_agents.idUser","=","users.id")->first();
        if ($dpeps!="[]" && $dpeps!=null && $dpeps!="")
             return $dpeps;
        return "NADA";
    }
    public function destroy($id)
    {
        //
        $this->dRepos->destroy($id);
        return "OK";
    }


 
    public function DrepsDpeps()
    {
        $id=Auth::user()->id;
        $dpeps=Dpeps::where("id","=",$id)->get();
        return view("DrepsDpeps",compact("dpeps"));
       /* $id=Auth::user()->id;
        $dpeps=Dpeps::where("id","=",$id)->get();
        return $dpeps!="[]"? $dpeps:"Nada";*/
       
    }
}
