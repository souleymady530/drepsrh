<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
        if(Auth::user()->type=="DREPS")
			return redirect("/homeDREPS");
		
		else if(Auth::user()->type=="ADMIN")
			return redirect("/homeAdmin");
		
		else if(Auth::user()->type=="DPEPS")
			return redirect("/homeDpeps");
		
		else if(Auth::user()->type=="MIN")
			return redirect("/homeMin");

        else if(Auth::user()->type=="Ets")
			return redirect("/homeEts");
		
        
    }

}