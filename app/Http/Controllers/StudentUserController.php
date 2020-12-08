<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classe;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class StudentUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();


        $session_id = Auth::user()->id;
        $students=User::find($session_id);
        //$matricule=$request['matricule'];
        //$matricule=Student::where('matricule', $matricule)->get();

        //$moispaie=now()->month;

        $StudentCours=DB::table('cours')
                     

                     ->join('fichiers', 'fichiers.cours_id', '=' , 'cours.id')

                     ->select('fichiers.image')
                     
                     ->get();

        $Student=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     
                     ->join('classes', 'students.classes_id', '=' , 'classes.id')

                     ->join('clas_profs', 'students.classes_id', '=' , 'clas_profs.classes_id')

                     ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

                     ->where('users.id', '=', $session_id)

                     ->select('users.id', 'users.name','users.photo', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name','students.id','students.matricule')
                     
                     ->get();
                    
                    return view('Etudiant.index',compact('Student','StudentCours'));
                    
    }


    public function courseChat()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();


        $session_id = Auth::user()->id;

        $StudentCours=DB::table('cours')
                     
                     ->join('fichiers', 'fichiers.cours_id', '=' , 'cours.id')

                     ->select('fichiers.image')
                     
                     ->get();

        $Student=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     
                     ->join('classes', 'students.classes_id', '=' , 'classes.id')

                     ->join('clas_profs', 'students.classes_id', '=' , 'clas_profs.classes_id')

                     ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')


                     ->where('users.id', '=', $session_id)

                     ->select('users.id', 'users.name','users.photo', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name','students.id','students.matricule')
                     
                     ->get();


       return view('Etudiant.courseChat', ['Student'=>$Student] ,compact('Student','StudentCours'));
    }

    public function mescours()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();
        $session_id = Auth::user()->id;
        $Student=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     
                     ->join('classes', 'students.classes_id', '=' , 'classes.id')

                     ->join('clas_profs', 'students.classes_id', '=' , 'clas_profs.classes_id')

                     
                     ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

                     ->where('users.id', '=', $session_id)

                     ->select('users.id', 'users.name','users.photo', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name','students.id','students.matricule', 'matieres.libelle as cours', 'matieres.id as matiereId')
                     
                     ->get();


       return view('Etudiant.mescours', ['Student'=>$Student] ,compact('Student'));
    }

    public function exercice()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();
        $session_id = Auth::user()->id;

        $StudentCours=DB::table('cours_profs')
                     
                     ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

                     ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

                     ->select('fichiers.image', 'fichiers.created_at as daterecept')
                     
                     ->get();

        $Student=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     
                     ->join('classes', 'students.classes_id', '=' , 'classes.id')

                     ->join('clas_profs', 'students.classes_id', '=' , 'clas_profs.classes_id')

                     ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')


                     ->where('users.id', '=', $session_id)

                     ->select('users.id', 'users.name','users.photo', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name','students.id','students.matricule','matieres.libelle as cours','matieres.id as matiereId')
                     
                     ->get();


       return view('Etudiant.exercice', ['Student'=>$Student] ,compact('Student', 'StudentCours'));
    }

    public function devoir()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();
        $session_id = Auth::user()->id;
        $Student=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     
                     ->join('classes', 'students.classes_id', '=' , 'classes.id')

                     ->join('clas_profs', 'students.classes_id', '=' , 'clas_profs.classes_id')

                     

                     


                     ->where('users.id', '=', $session_id)

                     ->select('users.id', 'users.name','users.photo', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name','students.id','students.matricule')
                     
                     ->get();


       return view('Etudiant.devoir', ['Student'=>$Student] ,compact('Student'));
    }

    public function notes()
    {

        //$User=User::all();
        //$Classe=Classe::all();
        //$Structure=Structure::all();
        $session_id = Auth::user()->id;
        $Student=DB::table('students')
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     
                     ->join('classes', 'students.classes_id', '=' , 'classes.id')

                     ->join('clas_profs', 'students.classes_id', '=' , 'clas_profs.classes_id')


                     ->where('users.id', '=', $session_id)

                     ->select('users.id', 'users.name','users.photo', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name','students.id','students.matricule')
                     
                     ->get();


       return view('Etudiant.notes', ['Student'=>$Student] ,compact('Student'));
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
