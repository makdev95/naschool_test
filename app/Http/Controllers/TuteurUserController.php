<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Tuteur;
use App\Models\Classe;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class TuteurUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $session_id =  Auth::guard('tuteur')->user()->id;

        $Student=DB::table('students')
                     
             ->join('users', 'users.id', '=' , 'students.users_id')

             ->join('parents', 'parents.id', '=' , 'students.parents_id')

             ->where('parents.id', '=', $session_id)

             ->select('users.id', 'users.name as stuname', 'users.prenom as stuprenom', 'users.email','users.tel','users.role', 'students.id as studentId','parents.name as tuteurNom')
             
             ->get();

             return view('Parents.home', compact('Student'));
    }


    public function devoirs()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();
        //$session_id = Auth::user()->id;
        $devoirs=DB::table('fichiers')

                     ->join('cours', 'cours.id', '=' , 'fichiers.cours_id')

                     ->join('type_fichier', 'fichiers.typeFichierId', '=' , 'type_fichier.id')

                     ->where('type_fichier.libelle', '=', 'Devoir de classe')

                     ->select('cours.description as desc','cours.title', 'fichiers.image', 'fichiers.created_at')
                     
                     ->get();


       return view('Parents.devoirs' ,compact('devoirs'));
    }

    public function notes()
    {

        $User=User::all();
        $Tuteur=Tuteur::all();
        $Classe=Classe::all();
        $Structure=Structure::all();
        $Structure=Structure::all();

        $session_id =  Auth::guard('tuteur')->user()->id;

        $Student=DB::table('students')
                     
             ->join('users', 'users.id', '=' , 'students.users_id')

             ->join('parents', 'parents.id', '=' , 'students.parents_id')

             ->where('parents.id', '=', $session_id)

             ->select('users.id', 'users.name as stuname', 'users.prenom as stuprenom', 'users.email','users.tel','users.role', 'students.id as studentId','parents.name as tuteurNom')
             
             ->get();

        $StudentNote=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')

                     ->join('parents', 'parents.id', '=' , 'students.parents_id')

                     ->join('evaluations', 'students.id', '=' , 'evaluations.students_id')

                     ->join('cours', 'cours.id', '=' , 'evaluations.fichiers_id')

                     ->where('parents.id', '=', $session_id)

                     ->select('users.id','users.name','users.prenom', 'evaluations.note','evaluations.observation','cours.title', 'evaluations.created_at')
                     
                     ->get();


       return view('Parents.notes' ,compact('StudentNote', 'Student'));
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
        $Student=new Student();

        $name=$request['name'];
        $prenom=$request['prenom'];
        $tel=$request['tel'];
        $adresse=$request['adresse'];
        $email=$request['email'];
        $role=$request['role'];
        $structures_id=$request['structures_id'];
        $password=Hash::make($request['password']);


        /*-------------User request----------------*/

        $User->name=$name;
        $User->prenom=$prenom;
        $User->tel=$tel;
        $User->role=$role;
        $User->email=$email;
        $User->structures_id=$structures_id;
        $User->password=$password;
        $User->adresse=$adresse;


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

            return redirect()->route('Etudiant.index')->with('status','Etudiant enrégistré avec succès');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        
    }

    public function showContenuCours(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
