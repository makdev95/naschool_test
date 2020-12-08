<?php

namespace App\Http\Controllers\Auth;
use App\Superadmins;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Schema;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class AdminSupLoginController extends Controller
{
    public function __construct()
    {
      //$this->middleware('guest:superadmin',['except'=>['logout']]);
    }

    public function showLoginForm()
    {
      return view('auth.loginsupadmin');
    }

    public function showCreateUser()
    {
      return view('auth.createsuperuser');
    }

     /**
     * Create a new Super admin user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Superadmins
     */
     protected function RegisterSupAdmin(Request $request)
    {
        $User=new Superadmins();

        $name=$request['name'];
        $email=$request['email'];
        $password=Hash::make($request['password']);

        $User->name=$name;
        $User->password=$password;
        $User->email=$email;

        $User->save();

        return redirect()->route('supadmin-create-form')->with('status','Parfait! Connectez-vous à ce lien ');

    }


    public function login(Request $request)
    {
      //validate the form data
      /*$this->validate($request,[
        'email' => 'required|email',
        'password'=> 'required|min:6'
      ]);*/

      $dataform = array(

          'email' => $request->input('email'),
          'password' => $request->input('password'),
      );

      //attempt to log the user include '

      if(Auth::guard('superadmin')->attempt($dataform)){

        //if successful redirect to the location 
        //return view('/Naschool/SuperAdmin/Dash');
        return redirect()->intended(route('SuperAdmin-Dash'));

      }

      //if unsuccessful redirect back to login with the form data
      return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('superadmin')->logout();

        return redirect('/');
    }
  

}
