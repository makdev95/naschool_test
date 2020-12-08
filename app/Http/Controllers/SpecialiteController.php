<?php

namespace App\Http\Controllers;

use App\Models\specialite;
use App\Models\Niveau;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Niveau=Niveau::all();
        //$Specialite=specialite::all();

        $session_id = Auth::user()->id;

        $specialites=DB::table('specialites')

            ->select('specialites.id', 'specialites.type')

             ->get();

        $Adminschool=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')
             
             ->where('users.id', '=', $session_id)

             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type')
             ->get();

        return view('Admin.specialite', compact('Adminschool', 'specialites'));
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
        $Specialite = new Specialite();

        $specialite=$request['specialite'];

        $Specialite->type=$specialite;

        $Specialite->save();

        return redirect()->route('specialite.index')->with('status','Specialité ajoutée avec succès dans votre école');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function show(specialite $specialite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function edit(specialite $specialite)
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
    public function update(Request $request, specialite $specialite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specialite  $specialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(specialite $specialite)
    {
        //
    }
}
