<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Matiere=Matiere::all();

        $session_id = Auth::user()->id;

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

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)

             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule')
             
             ->get();

        return view('Admin.matiere', compact('Adminschool' , 'Niveau'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Matiere = new Matiere();
        $matiere=$request['libelle'];
        $niveau=$request['niveau'];

        $Matiere->libelle=$matiere;
        $Matiere->niveau=$niveau;

        $Matiere->save();

        return redirect()->route('matiere.index')->with('status','Une nouvelle matière ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(Matiere $matiere)
    {
        
    }

    public function voir(Request $request)
    {

        $session_id = Auth::user()->id;

        $classe= $request['classe'];
        
        $matieres=DB::table('clas_profs')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('clas_profs.classes_id', '=', $classe)

        ->select('matieres.libelle as matiereLib')
             
        ->get();

        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('users.id', '=', $session_id)


        ->select('professeurs.id as profId','structures.struct_name','classes.id as classesId','classes.classes_name','matieres.libelle as matiereLib')
             
        ->get();

        echo $classe;

        return view('Teacher.matieres', compact('matieres', 'ProfesseurClasse'));       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit(Matiere $matiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matiere $matiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matiere $matiere)
    {
        //
    }
}
