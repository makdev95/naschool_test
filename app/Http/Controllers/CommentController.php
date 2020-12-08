<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\Cour;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$Niveau=Niveau::all();
        //$Specialite=Specialite::all();
        //$Niveauspe=NiveauSpecialite::all();

        $session_id = Auth::user()->id;
        $Cycle=Cycle::all();

        $specialites=DB::table('specialites')

            ->select('specialites.id', 'specialites.type')

             ->get();

        $Niveau=DB::table('niveaux')

                 
             ->join('cycle', 'niveaux.cycle_id', '=' , 'cycle.id')

             ->select('cycle.id as cycleId', 'cycle.libelle as cycleLib', 'niveaux.id as niveauId', 'niveaux.libelle as NiveauLib')
             
             
             ->get();

        $Adminschool=DB::table('users')

                 
             ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')
             
             ->where('users.id', '=', $session_id)

             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id','specialites.type')
             
             ->get();

        return view('comment', compact(''));
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

        $Niveau = new Niveau();
        $Specialite = new Specialite();
        $Niveauspe = new NiveauSpecialite();

        $niveau=$request['niveau'];
        $cycle=$request['cycle'];

        $Niveau->libelle=$niveau;
        $Niveau->cycle_id=$cycle;

        $Niveau->save();

        return redirect()->route('niveau.index')->with('status','Niveau ajoutée avec succès');
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
