<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classe;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session_id = Auth::user()->id;

        $students=DB::table('students')
                     
                     ->join('users', 'users.id', '=' , 'students.users_id')
                     ->where('role', '=', 'Etudiant')

                     ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role', 'students.id as studentId')
                     
                     ->get();

        $Adminschool=DB::table('users')
                     
                     ->join('structures', 'structures.id', '=' , 'users.structures_id')
                     ->join('classes', 'structures.id', '=' , 'classes.structure_id')
                     ->where('users.id', '=', $session_id)
                     ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role', 'classes.id', 'classes.id As ClassId','classes_name','structures.id As structId','structures.struct_name')
                     
                     ->get();

        return view('Admin.student', compact('Adminschool', 'students'));
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

            return redirect()->route('student.index')->with('status','Etudiant enrégistré avec succès');
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
