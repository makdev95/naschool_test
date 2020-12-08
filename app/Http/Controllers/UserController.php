<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Student;
use App\Models\Classe;
use App\Models\Structure;
//use App\Models\Parent;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User=User::all();
        //$Classe=Classe::all();
        $Structure=Structure::all();

        $session_id = Auth::user()->id;

        $Admin_school=DB::table('users')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     ->join('classes', 'structures.id', '=' , 'classes.structure_id')
                     ->where('users.id', '=', $session_id)
                     ->select('users.*', 'classes.*','structures.*')
                     
                     ->get();

        return view('Admin.adduser', compact('Admin_school'));
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

        $User=new User();
        $Student=new Student();
        //$Parent=new Parent();

        $name=$request['name'];
        $prenom=$request['prenom'];
        $tel=$request['tel'];
        $adresse=$request['adresse'];
        $email=$request['email'];
        $role=$request['role'];
        $datenaiss=$request['datenaiss'];
        $lieunaiss=$request['lieunaiss'];
        $sexe=$request['sexe'];
        $structures_id=$request['structures_id'];
        $password=Hash::make($request['password']);

        $photo=$request->file('image');

            $new_name= $prenom. '.' . $photo->
            getClientOriginalExtension();
            $photo->move(public_path('img'), $new_name);

        /*-------------User request----------------*/

        $User->name=$name;
        $User->prenom=$prenom;
        $User->tel=$tel;
        $User->role=$role;
        $User->email=$email;
        $User->datenaiss=$datenaiss;
        $User->lieunaiss=$lieunaiss;
        $User->sexe=$sexe;
        $User->photo=$new_name;
        $User->structures_id=$structures_id;
        $User->password=$password;
        $User->adresse=$adresse;

        /*-------------Parent request----------------*/
        /*$nameT=$request['nameT'];
        $prenomT=$request['prenomT'];
        $telT=$request['telT'];
        $adresseT=$request['adresseT'];
        $emailT=$request['emailT'];
        $dateT=$request['dateT'];
        $lieuT=$request['lieuT'];
        $profession=$request['profT'];
        $passwordT=rand(1555, 1050);
        $password=Hash::make($request['password']);

        $Parent->name=$nameT;
        $Parent->prenom=$prenomT;
        $Parent->tel=$telT;
        $Parent->profession=$profession;
        $Parent->lieunais=$lieuT;
        $Parent->datenais=$dateT;
        $Parent->email=$emailT;
        $Parent->password=$passwordT;
        $Parent->adresse=$adresseT;*/

        $TuteurNon=$request['tuteurNon'];

        /*-------------Student request----------------*/
        
        $matricule=$request['matricule'];
        $classe_id=$request['classe_id'];
        
        /*-------------------------------------------*/

        
        
        if($User->save()){

            $user_id= $User->id;

                $Student->matricule=$matricule;
                $Student->classes_id=$classe_id;
                $Student->statut=1;
                $Student->users_id=$user_id;
                $Student->parents_id=0;
                $Student->save();

            return redirect()->route('student.index')->with('status','Etudiant enrégistré avec succès');
        }


    }


    public function getStudentAPI()
    {
        $Student = new Student();

        $request = $Student->get('http://nambongo.obac-alert.com/api/v1/user/paiements?matricule');


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
    }
}
