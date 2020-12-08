<?php

namespace App\Http\Controllers;

use App\Models\Tuteur;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use DB;

class tuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
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
        /*----------Parent request----------------------*/

        $Tuteur=new Tuteur();
        $Student=new Student();

        $nomtuteur=$request['nomtuteur'];
        $prenomtuteur=$request['prenomtuteur'];
        $teltuteur=$request['teltuteur'];
        $addrtuteur=$request['addrtuteur'];
        $emailtuteur=$request['emailtuteur'];
        $lieututeur=$request['lieututeur'];
        $datetuteur=$request['datetuteur'];
        $profession=$request['profession'];
        $password=Hash::make($request['password']);


        $student_id=$request['student_id'];

        $Tuteur->name=$nomtuteur;
        $Tuteur->prenom=$prenomtuteur;
        $Tuteur->adresse=$addrtuteur;
        $Tuteur->tel=$teltuteur;
        $Tuteur->profession=$profession;
        $Tuteur->email=$emailtuteur;
        $Tuteur->datenais=$datetuteur;
        $Tuteur->lieunais=$lieututeur;
        $Tuteur->password=$password;


        if($Tuteur->save())
        {
            $tuteurId= $Tuteur->id;

            $Student=Student::find($student_id);

            $Student->parents_id=$Tuteur->id;

            $Student->save();

            if ($Student) {
                
               return redirect()->route('Admin.tuteur')->with('status','Le tuteur a été enrégistré avec succès');
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function show(tuteur $specialite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function edit(tuteur $specialite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tuteur $tuteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(tuteur $specialite)
    {
        //
    }
}
