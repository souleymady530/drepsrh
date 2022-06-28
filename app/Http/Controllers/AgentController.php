<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Repositories\AgentRepository;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $aRepos;
    protected $nombre=15;

    public function __construct(agentRepository $arepos)
    {
    $this->aRepos=$arepos;
    }
    public function index()
    {
        $type=Auth::user()->type;
        if($type==2)
           {
                $agents=Agent::where("TypeAgent","=","MIN")->orderBy("nomAgent")->paginate($this->nombre);
                $links=$agents->setPath('');
                return view("MinAllAgents",compact("agents","links"));
           } 
    
        else if($type==1)
           {
            $agents=$this->aRepos->getPaginate($this->nombre);
            $links=$agents->setPath('');
            return view("allAgents",compact("agents","links"));
           } 
     
        
        else if($type==4)
        {
            $agents=$this->aRepos->getPaginate($this->nombre);
            $links=$agents->setPath('');
            return view("allAgents",compact("agents","links"));
        } 
 
        else if($type==3)
        {
            $agents=$this->aRepos->getPaginate($this->nombre);
            $links=$agents->setPath('');
            return view("DrepsAllAgents",compact("agents","links"));
        } 
 

        else if($type==0)
            
        {
            $agents=$this->aRepos->getPaginate($this->nombre);
            $links=$agents->setPath('');
            return view("allAgents",compact("agents","links")); 
        } 
 
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("CreateAgent");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAgentRequest $request)
    {
        $this->aRepos->store($request->all());
        //return view("StoreConfirmRegistration");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent=$this->aRepos->getById($id);
        return view("FicheAgent",compact("agent"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $agent=$this->aRepos->getById($id);
       return view("EditAgent",compact("agent"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgentRequest $request, $id)
    {
        $this->aRepos->update($id,$request->all());
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
        $this->aRepos->Delete($id);
        return redirect()->back();
    }   
}       
