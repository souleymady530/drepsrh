<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\lieudetravail;
use App\Models\Commune;
use App\Models\localite;

use App\Repositories\LieudetravailRepository;


class LieuDeTravailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $lRepos;
    protected $nbre;
    public function __construct(LieudetravailRepository $lRepos)
    {
        $this->lRepos=$lRepos;
    }


    public function index()
    {
        //
        $lieux=$this->lRepos->getPaginate($this->nbre);
        $links=$lieux->setPath('');
    $localites=localite::all();
        return view("allLieu",compact('links','lieux','localites'));
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
                "nomLieuDeTravail"=>"required|string|min:5",
                "TypeLieuDeTravail"=>"required|string|min:5",
                "Localite"=>"required",
            ]);
            $this->lRepos->store($request->all());
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
        $lieu=$this->lRepos->getById($id);
        return $lieu;
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
                "nomLieuDeTravail"=>"required|string|min:5",
                "TypeLieuDeTravail"=>"required|string|min:5",
                "Localite"=>"required",
            ]);
            $this->lRepos->update($id,$request->all());
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
        $this->lRepos->destroy($id);
        return "ok";
    }
}
