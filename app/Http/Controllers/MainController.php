<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
