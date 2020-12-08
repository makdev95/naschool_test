<?php

namespace App\Http\Controllers;

use App\Models\NiveauSpecialite;
use App\Models\Niveau;
use App\Models\Specialite;
use Illuminate\Http\Request;

class NiveauSpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Niveau=Niveau::all();
        $Niveauspe=NiveauSpecialite::all();
        $Specialite=Specialite::all();

        return view('Admin.niveau', compact('Niveau','Niveauspe','Specialite'));
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
        $NivSpecialite = new NiveauSpecialite();

        $specialite=$request['specialite'];
        $niveau=$request['niveau'];

        $NivSpecialite->niveaux_id=$niveau;
        $NivSpecialite->specialites_id=$specialite;

        $NivSpecialite->save();

        return redirect()->route('niveau.index')->with('status','Specialité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NiveauSpecialite  $niveauSpecialite
     * @return \Illuminate\Http\Response
     */
    public function show(NiveauSpecialite $niveauSpecialite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NiveauSpecialite  $niveauSpecialite
     * @return \Illuminate\Http\Response
     */
    public function edit(NiveauSpecialite $niveauSpecialite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NiveauSpecialite  $niveauSpecialite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NiveauSpecialite $niveauSpecialite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NiveauSpecialite  $niveauSpecialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(NiveauSpecialite $niveauSpecialite)
    {
        //
    }
}
