<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Repositories\ActualiteRepository;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $actualiteRepos;
    private $nbrePerPage=15;
    public function __construct(ActualiteRepository $actualiteRepository)
    {
        $this->actualiteRepos=$actualiteRepository;
    }


    public function index()
    {
        //
        $actualites=$this->actualiteRepos->getPaginate($this->nbrePerPage);
       $links=$actualites->setPath("/");
        return view("allActualite",compact("actualites",'links'));
    }

    public function indexForWelcome()
    {
        //
        $actualites=Actualite::all();
        return $actualites!='[]' ? $actualites:"Nada";
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
        $this->validate($request,
        [
           
            'titre'=>"required|max:250",
            'chemin'=>"required",
            'datePublication'=>"date",
            
            
            
        ]);
        //Traitemenet pour l image
        $extensions=['jpg','png','jpeg','JPEG','PNG','JPG'];
        $nom='';
        $chemin="";
        $foto=$request['chemin'];
		if($foto->isValid())
		{
			$chemin='img';
			do
            
			{
				$nom=date("ymdHis").'.'.$foto->getClientOriginalExtension();
			}
			while(file_exists($chemin.'/'.$nom));
			if($foto->move($chemin,$nom))
			{
               
                echo$requete["resume1"]=substr($request["resume"],0,249);
                echo$requete["resume2"]=substr($request["resume"],249,249);
                echo$requete["resume3"]=substr($request["resume"],749,249);
                echo$requete["resume4"]=substr($request["resume"],999,249);
                $requete["chemin"]=$chemin.'/'.$nom;
                $requete["titre"]=$request["titre"];
                $requete["datePublication"]=$request["datePublication"];
                
                
                $this->actualiteRepos->store($requete);
            }
        
        }
				

        
        return redirect("/Actualite");
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
        $actualite=$this->actualiteRepos->getById($id);
        return view("showActualite",compact("actualite"));
    }


    public function showActualite($id)
    {
        $actualite=$this->actualiteRepos->getById($id);
       return $actualite;
        
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
        $actualite=$this->actualiteRepos->getById($id);
        return view("editActualite",compact("actualite"));
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
        $this->validate($request,
        [
            'titre'=>"required|max:250",
            'chemin'=>"required",
            'datePublication'=>"date",          
            
        ]);


       // $extensions=['jpg','png','jpeg','JPEG','PNG','JPG'];
        $nom='';
        $chemin="";
        $foto=$request['chemin'];
		if($foto->isValid())
		{
			$chemin='img';
			do
            
			{
				$nom=date("ymdHis").'.'.$foto->getClientOriginalExtension();
			}
			while(file_exists($chemin.'/'.$nom));
			if($foto->move($chemin,$nom))
			{
               
                $requete["resume1"]=substr($request["resume"],0,249);
                $requete["resume2"]=substr($request["resume"],249,249);
                $requete["resume3"]=substr($request["resume"],749,249);
                $requete["resume4"]=substr($request["resume"],999,249);
                $requete["chemin"]=$chemin.'/'.$nom;
                $requete["titre"]=$request["titre"];
                $requete["datePublication"]=$request["datePublication"];
                
                
                $this->actualiteRepos->update($id,$requete);
            }
        }




       
       return redirect("/Actualite");
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
        $this->actualiteRepos->destroy($id);
        return redirect()->back();
    }
}
