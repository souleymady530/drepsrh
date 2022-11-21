<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Repositories\AnnonceRepository;





class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $aRepos;
     private $nbrePerPage=15;

     public function __construct(AnnonceRepository $aRepos)
     {
        $this->aRepos=$aRepos;
     }

    public function index()
    {
        $annonces=$this->aRepos->getPaginate($this->nbrePerPage);
        $links=$annonces->setpath("/");
        return view("allAnnonce",compact("annonces","links"));
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
            "titre"=>"required|string|max:250",
        ]);

       
        $extensions=['pdf','PDF'];
        $nom='';
        $chemin="";
        $file=$request['chemin'];
       
		
            $request['titre'];
			$chemin='files/';
			do
			{
				$nom=date("ymdHis").'.'.$file->getClientOriginalExtension();
			}
			while(file_exists($chemin.'/'.$nom));
            
			if($file->move($chemin,$nom))
			{
               
               $request["chemin"];
                $requete["chemin"]=$chemin.'/'.$nom;
                $requete["titre"]=$request["titre"];
                echo$requete['tailleFichier']=filesize($chemin.'/'.$nom);
                $requete["datePublication"]=date("Ydm");
                $this->aRepos->store($requete);
            }
            //a revoir il faut ajouter des conditions pour renforce les champs
        /*if($file->isValid())
		{
        
        }*/
       
        return redirect()->back();

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
        $extensions=['pdf','PDF'];
        $nom='';
        $chemin="";
        $file=$request['chemin'];
		if($file->isValid())
		{
			$chemin='files/';
			do
            
			{
				$nom=date("ymdHis").'.'.$file->getClientOriginalExtension();
			}
			while(file_exists($chemin.'/'.$nom));
			if($file->move($chemin,$nom))
			{
               
              
                $requete["chemin"]=$chemin.'/'.$nom;
                $requete["titre"]=$request["titre"];
                $requete["datePublication"]=date("ymdHis");
                
                
                $this->aRepos->store($requete);
            }
        
        }
        $this->aRepos->update($id,$this->request->all());
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
        $this->aRepos->destroy($id);
        return redirect()->back();
    }
}
