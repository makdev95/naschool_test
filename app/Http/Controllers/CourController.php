<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use App\Models\Fichier;
use App\Models\TypeFichier;
use App\Models\CoursProf;
use App\Models\ClasProf;
use App\Models\Structure;
use Illuminate\Http\Request;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        return view('Teacher.addcour', compact('Cour','ClasProf','CoursProf','Fichiers'));
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

        $Cour = new Cour();
        $TypeFichier= new TypeFichier();
        $Fichiers = new Fichier();
        $CoursProf = new CoursProf();

        /*-------------Cours request----------------*/

        $title=$request['title'];
        $desc=$request['description'];
        $clas_profs_id=$request['clas_profs_id'];
        $prof_id=$request['prof_id'];

        $Cour->title=$title;
        $Cour->description=$desc;
        $Cour->etat=1;

        /*-------------fichiers cours request----------------*/

        $upload=$request->file('image');

            $cours= $title. '.' . $upload->
            getClientOriginalExtension();
            $upload->move(public_path('cours'), $cours);
        
        if($Cour->save()){

        $cour_id= $Cour->id;

            $CoursProf->cours_id=$cour_id;
            $CoursProf->clas_profs_id=$clas_profs_id;
            $CoursProf->statut=1;

            // fichiers uploaded
            $Fichiers->cours_id=$cour_id;
            //$Fichiers->professeurs_id=$prof_id;
            $Fichiers->type_fichiers_id=0;
            $Fichiers->image=$cours;
            $Fichiers->statut=1;

            $CoursProf->save();
            $Fichiers->save();

            return redirect()->route('cour.index')->with('status','Le cours a été ajouté avec succès');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function show(Cour $cour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit(Cour $cour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cour $cour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cour $cour)
    {
        //
    }
}
