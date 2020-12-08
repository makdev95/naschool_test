<?php

namespace App\Http\Controllers;

use App\Models\Fichier;
use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Fichier;
use App\Models\Cour;
use App\Models\CoursProf;
use App\Models\Structure;
use App\Models\Matiere;
use App\Models\ClasProf;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class FichierController extends Controller
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

        $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

             ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

             ->join('cours_profs', 'clas_profs.id', '=' , 'cours_profs.clas_profs_id')

             ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function show(Fichier $fichier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function edit(Fichier $fichier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fichier $fichier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fichier $fichier)
    {
        //
    }
}
