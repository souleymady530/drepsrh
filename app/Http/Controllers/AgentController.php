<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Repositories\AgentRepository;
use App\Models\lieudetravail;
use App\Models\categorie;
use App\Models\diplomeAccademique;
use App\Models\typepersonnel;
use App\Models\fonction;
use App\Models\emploi;
use App\Models\PHPExcel;
use App\Models\PHPExcel\IOFactory;
use Illuminate\Support\Facades\DB;


//include("../../App/Models/PHPExcel/IOFactory.php");


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
        //$type=Auth::user()->type;
        if(Auth::user()==null)
            return redirect("/");
            $type=Auth::user()->type;
        $lieuxDeTravail=lieudetravail::all();
        $categories=categorie::all();
        $diplomes=diplomeaccademique::all();
        $typePersonnels=typepersonnel::all();
        $fonctions=fonction::all();
        $emplois=emploi::all();
        $agents=Agent::where("idCreateur","=",Auth::user()->id)->orderBy("nomAgent")->paginate($this->nombre);
        if($type==2)
           {
               
                $links=$agents->setPath('');
                return view("MinAllAgents",compact("agents","links","lieuxDeTravail","categories","diplomes","typePersonnels","emplois","fonctions"));
           } 
    
        else if($type==1)
           {
            $links=$agents->setPath('');
            return view("allAgents",compact("agents","links","lieuxDeTravail","categories","diplomes","typePersonnels","emplois","fonctions"));
           } 
     
        
        else if($type==4)
        {
            $links=$agents->setPath('');
            return view("DpepsAllAgents",compact("agents","links","lieuxDeTravail","categories","diplomes","typePersonnels","emplois","fonctions"));
        } 
 
        else if($type==3)
        {
            $links=$agents->setPath('');
            return view("DrepsAllAgents",compact("agents","links","lieuxDeTravail","categories","diplomes","typePersonnels","emplois","fonctions"));
        } 
 

        else if($type==0)
            
        {
            $links=$agents->setPath('');
            return view("allAgents",compact("agents","links","lieuxDeTravail","categories","diplomes","typePersonnels","emplois","fonctions")); 
        } 
 
       
    }

    public function AgentsDreps($idDreps)
    {
        $agents=Agent::where("idCreateur","=",$idDreps)->get();
        return $agents!="[]" ? $agents:"Nada";
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
        if($request->ajax())
        {
           

            
                $this->aRepos->store($request->all());
                return response()->json();
           
           
        }
        abort(404);
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
       return $agent!="[]" ? $agent:"Nada" ;
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
                "matriculeAgent"=>"string|unique:agent,matriculeAgent,".$id,
                "nomAgent"=>"required",
                "prenomAgent"=>"required",
                "sexeAgent"=>"required",
                "DateDeNaissanceAgent"=>"required",
                "DateIntegrationFP"=>"required",
                "TypeDePersonnel"=>"required",
                "LieuDeTravailAgent"=>"required",
                "FonctionAgent"=>"required",
                "DernierDiplomeAccademique"=>"required", 
                "CategorieAgent"=>"required",   
                "DatePriseServiceLieuTravail"=>"required", 
            ]);
            $this->aRepos->update($id,$request->all());
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
        $this->aRepos->destroy($id);
        return "OK";
    } 
    
    public function AgentsDpeps($id)
    {
        $agents=Agent::where("idCreateur","=",$id)->get();
        return $agents!="[]" ? $agents:"Nada";
    }
    public function AgentsEts($id)
    {
        $agents=Agent::where("idCreateur","=",$id)->get();
        return $agents!="[]" ? $agents:"Nada";
    }

   


    public function importerListeAgent(Request $request)
    {
        $csvxrow = fopen($request["chemin"],"r");
        $arr=$this->csv2array($request["chemin"]);
        
        for($i=1;$i<count($arr);$i++)
        {
           // echo $arr[$i][0];
           $agentById=$this->aRepos->getById((int)$arr[$i][0])->first();
           $agentByMat=Agent::where("matriculeAgent","=",$arr[$i][1])->first();
           if(($agentById->id==null || $agentById->id=="" || $agentById->id==0) && ($agentByMat->marticuleAgent==null || $agentByMat->matriculeAgent==""))
           {
                DB::table('agent')->insert(
                [
                'id'=>(int)$arr[$i][0],
                'matriculeAgent'=>$arr[$i][1],
                'nomAgent'=>$arr[$i][2],
                'prenomAgent'=>$arr[$i][3],
                'sexeAgent'=>$arr[$i][4],
                'DateDeNaissanceAgent'=>date("Ymd",strtotime($arr[$i][5])) ,
                'DateDerniereDecoration'=>date("Ymd",strtotime($arr[$i][6])) ,
                'Titrehonorifique'=>$arr[$i][7],
                'DateIntegrationFP'=>date("Ymd",strtotime($arr[$i][8]))  ,
                'DatePriseServiceLieuTravail'=>date("Ymd",strtotime($arr[$i][9])) ,
                'DatePriseServiceProvinceRegion'=>date("Ymd",strtotime($arr[$i][10])) ,
                'LieuDeNaissanceAgent'=>$arr[$i][11],
                'TypeDePersonnel'=>$arr[$i][12],
                'LieuDeTravailAgent'=>$arr[$i][13],
                'EmploiAgent'=>$arr[$i][14],
                'FonctionAgent'=>$arr[$i][15],
                'DernierDiplomeAccademique'=>$arr[$i][16],
                'CategorieAgent'=>$arr[$i][17],
                'EchelleAgent'=>$arr[$i][18],
                'EchellonAgent'=>$arr[$i][19],
                'TypeAgent'=>$arr[$i][20],
                'idCreateur'=>$arr[$i][21],
                ]
            );

           }  
        }
    }

    public function exportData()
    {

        $agents=Agent::where("idCreateur","=",Auth::user()->id)->get();
        $nomFichier="listeAgentsExport_".date("Ymdhms").".csv";
        $chemin="Exports/".$nomFichier;
        $file=fopen($chemin,'w');
        
        foreach($agents as $data)
        {
            fputcsv($file,array($data),";");
        }
        fclose($file);
        return $nomFichier;

    } 

    function csv2array($file, $delim = ';', $encl = '"', $header = false) {
   
        # File does not exist
        if(!file_exists($file))
            return false;
       
        # Read lines of file to array
        $file_lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
       
        # Empty file
        if($file_lines === array())
            return NULL;
       
        # Read headers if you want to
        if($header === true) {
            $line_header = array_shift($file_lines);
            $array_header = array_map('trim', str_getcsv($line_header, $delim, $encl));
        }
    
        $out = NULL;
    
        # Now line per line (strings)
        foreach ($file_lines as $line) {
            # Skip empty lines
            if(trim($line) === '')
                continue;
           
            # Convert line to array
            $array_fields = array_map('trim', str_getcsv($line, $delim, $encl));
           
            # If header present, combine header and fields as key => value
            if($header === true)
                $out[] = array_combine ($array_header, $array_fields);
            else
                $out[] = $array_fields;
        }
       
        return $out;
    }



    
          
    






}        

