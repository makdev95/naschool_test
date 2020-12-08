<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Structure;
use App\Models\Matiere;
use App\Models\ClasProf;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$User=User::all();
        $Classe=Classe::all();
        $Matiere=Matiere::all();
        //$Structure=Structure::all();

         $session_id = Auth::user()->id;

         $Prof=DB::table('professeurs')
                     
                     ->join('users', 'users.id', '=' , 'professeurs.users_id')
                     ->where('role', '=', 'Professeur')

                     ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role', 'professeurs.id as profId')
                     
                     ->get();

        $Professeur=DB::table('users')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     ->join('classes', 'structures.id', '=' , 'classes.structure_id')
                    
                     ->where('users.id', '=', $session_id)
                     ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.classes_name','classes.id as classId')
                     
                     ->get();

        return view('Admin.teacher', compact('Professeur','Prof', 'Classe', 'Matiere'));
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
           
        $User=new User();
        $Prof=new Professeur();
        $Classprof=new ClasProf();

         /*-------------User request----------------*/

        $name=$request['name'];
        $prenom=$request['prenom'];
        $tel=$request['tel'];
        $adresse=$request['adresse'];
        $email=$request['email'];
        $role=$request['role'];
        $structures_id=$request['structures_id'];
        $password=Hash::make($request['password']);

        $User->name=$name;
        $User->prenom=$prenom;
        $User->tel=$tel;
        $User->role=$role;
        $User->email=$email;
        $User->structures_id=$structures_id;
        $User->password=$password;
        $User->adresse=$adresse;


        /*-------------teacher request----------------*/
        
        $matricule=$request['matricule'];

        /*-------------Class prof request----------------*/
        
        $montant=$request['montant'];
        //$classe_id=$request['classe_id'];
        
        /*-------------------------------------------*/

        if($User->save()){

            $user_id= $User->id;

            $Prof->matricule=$matricule;
            $Prof->cv="Upload";
            $Prof->statut=1;
            $Prof->users_id=$user_id;

            $Prof->save();
            
            return redirect()->route('professeur.index')->with('alert','Professeur enrégistré avec succès');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professeur $professeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professeur $professeur)
    {
        //
    }
}
