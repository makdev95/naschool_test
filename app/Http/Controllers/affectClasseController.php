<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use App\Models\NiveauSpecialite;
use App\Models\Specialite;
use App\Models\ClasProf;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class affectClasseController extends Controller
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
        $ClasProf = new ClasProf();

        $professeur=$request['professeur'];
        $classe=$request['classe'];
        $cours=$request['cours'];
        $montant=$request['montant'];


        $ClasProf->professeurs_id=$professeur;
        $ClasProf->classes_id=$classe;
        $ClasProf->matieres_id=$cours;
        $ClasProf->montant=$montant;

        $ClasProf->save();

        return redirect()->route('professeur.index')->with('status','Le professeur a été affecté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show(Niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}
