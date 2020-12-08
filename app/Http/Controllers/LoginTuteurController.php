<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteur;
use Auth;

class LoginTuteurController extends Controller

{

    public function __construct()
    {
      $this->middleware('guest:tuteur',['except'=>['logout']]);
    }

    public function login(Request $request){

    	//dd($request->all());
        $this->validate($request,[
            
                'email' => 'required|email',
                'password'=> 'required|min:8'
        ]);

    	if(Auth::guard('tuteur')->attempt([

    		'email' => $request['email'],
    		'password' => $request['paswword'],

    	]))

    	{
			//$tuteur = Tuteur::where('email' , $request->email)->first();
			return redirect()->route('tuteur-home'); 
    	}
   
    }

    public function logout()
    {
        Auth::guard('tuteur')->logout();

        return redirect('/');
    }

    
}
