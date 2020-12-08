<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Structure;
use App\Models\NiveauSpecialite;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $session_id = Auth::user()->id;

        //$User=User::all();
        //$Classe=Classe::all();
        //$Matiere=Matiere::all();
        //$Structure=Structure::all();

        $specialites=DB::table('specialites')

            ->select('specialites.id', 'specialites.type')

             ->get();

        $Niveau=DB::table('niveaux')

                 
             ->join('cycle', 'niveaux.cycle_id', '=' , 'cycle.id')
             ->join('niveau_specialites', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->select('cycle.id as cycleId', 'cycle.libelle as cycleLib', 'niveaux.id as niveauId', 'niveaux.libelle as NiveauLib','niveau_specialites.id as niveauspeId')
             
             
             ->get();

        $niveaux=DB::table('niveaux')

            ->join('niveau_specialites', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

            ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

            ->select('niveaux.id', 'niveaux.libelle', 'niveau_specialites.id as niveauspeId')

             ->get();


        $Adminschool=DB::table('users')

                 
             ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')
             
             ->where('users.id', '=', $session_id)

             //->groupBy('users.id')

             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','specialites.id as speId','specialites.type')

             ->get();

        return view('Admin.addclasse', compact('Adminschool', 'specialites', 'niveaux', 'Niveau'));
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

        $classe = new Classe();

        $name=$request['name'];
        $niveausp_id=$request['niveauspe_id'];
        $structures_id=$request['structures_id'];
        $montant=$request['montant'];

        $classe->niveausp_id=$niveausp_id;
        $classe->montant=$montant;
        $classe->structure_id=$structures_id;
        $classe->classes_name=$name;

        $classe->save();

        return redirect()->route('classe.index')->with('status','Classe ajoutée avec succès dans votre école');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        //
    }
}
