<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Repositories\GalleryRepository;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $gRepos;
    private $nbrePerPage=15;
    public function __construct(GalleryRepository $gRepos)
    {
        $this->gRepos=$gRepos;
    }


    public function index()
    {
        //
        $fotos=$this->gRepos->getPaginate($this->nbrePerPage);
        return view("allFotos",compact("fotos"));
    }
    public function getGallery()
    {
        $fotos=Gallery::all();
        return $fotos!='[]'? $fotos:"Nada";
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
            'titre'=>'required',
        ]);


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
                $requete["chemin"]=$chemin.'/'.$nom;
                 $request['chemin'];
                $tab["titre"]=$request['titre'];
                $tab["chemin"]=$chemin.'/'.$nom;;
                $this->gRepos->store($tab);
            }
        
        }
			


       
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
        $foto=$this->gRepos->getById($id);
        return view("showFoto",compact("foto"));
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
        $foto=$this->gRepos->getById($id);
        return $foto;
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
        $this->gRepos->update($id,$request->all());
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
        $this->gRepos->destroy($id);
        return redirect()->back();
    }
}
