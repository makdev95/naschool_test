<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Http;
use DB;
use App\Model\Student;
use Auth;

class LoginUserController extends Controller

{

    public function login(Request $request){

    	//dd($request->all());

        //$student= Student::find();

    	if(Auth::attempt([

    		'email' => $request->email,
    		'password' => $request->password,

    	]))


    	{
			$user = User::where('email' , $request->email)->first();

			if ($user->is_Teacher()) {
				
				return redirect()->route('Professeur.home'); 
			}

			elseif ($user->is_Student()) {
                            
                    return redirect()->route('Etudiant.home');
     
			}


            elseif ($user->is_Admin()) {
                
                return redirect()->route('Home_Admin');
            }

			else{

                return view ('/');
            }

    	}
   
    }
}
