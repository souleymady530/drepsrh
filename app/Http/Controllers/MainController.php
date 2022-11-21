<?php

namespace App\Http\Controllers;
use App\Models\Actualite;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Annonce;
class MainController extends Controller
{
    //
    public function homeAdmin()
    {
        return view("homeAdmin");
    }
    public function HomeMin()
    {
        return view("homeMin");
    }
    
    public function HomeDPEPS()
    {
        return view("homeDpeps");
    }
    public function HomeDREPS()
    {
        return view("homeDreps");
    }
    
    public function HomeEts()
    {
        return view("homeEts");
    }

    public function welcome()
    {
         $actus=Actualite::paginate(5);
         $fotos=Gallery::all();
            $annonces=Annonce::all();
;        return view("welcome",compact("actus","fotos",'annonces'));
    }
}
