<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Fichier;
use App\Models\TypeFichier;
use App\Models\Cour;
use App\Models\Student;
use App\Models\CoursProf;
use App\Models\Structure;
use App\Models\Matiere;
use App\Models\ClasProf;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class ProfUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $session_id = Auth::user()->id;

        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('users.id', '=', $session_id)


        ->select('professeurs.id as profId','structures.struct_name','classes.id as classesId','classes.classes_name','matieres.libelle as matiereLib')
             
        ->get();

        


        $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)


             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')
             
             ->get();

        return view('Teacher.index', compact('Professeur', 'ProfesseurClasse'));
    }
    

     public function cours(Request $request)
    {

        $session_id = Auth::user()->id;

        $classe= $request['classe'];

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $TypeFichier=TypeFichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('users.id', '=', $session_id)


        ->select('professeurs.id as profId','structures.struct_name','classes.id as classesId','classes.classes_name','matieres.libelle as matiereLib')
             
        ->get();


        $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)

             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')
             
             ->get();

        return view('Teacher.addcour', compact('Professeur', 'ProfesseurClasse','TypeFichier'));
    }


     public function voircours()
    {

        $session_id = Auth::user()->id;

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('users.id', '=', $session_id)


        ->select('professeurs.id as profId','structures.struct_name','classes.id as classesId','classes.classes_name','matieres.libelle as matiereLib')
             
        ->get();

        $ProfCours=DB::table('cours_profs')
                     
                     ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

                     ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

                     ->select('fichiers.image', 'fichiers.created_at as daterecept')
                     
                     ->get();

        $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)


             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')

             
             
             ->get();
        return view('Teacher.cours', compact('Professeur', 'ProfCours', 'ProfesseurClasse'));
    }

    public function matieres(Request $request)
    {

        
    }

    public function mestudiant(Request $request)
    {

        $session_id = Auth::user()->id;

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        $classe=$request['classe'];

        $ClasseEtudiant=DB::table('clas_profs')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('students', 'students.classes_id', '=' , 'clas_profs.classes_id')

        ->join('users', 'students.users_id', '=' , 'users.id')


        ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')


        ->select('users.id','users.name', 'users.prenom','classes.id', 'classes.classes_name')

        ->when($classe, function ($query, $role) {
                    return $query->where('classes.id', $classe);
                })
             
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

        $ProfCours=DB::table('cours_profs')
                     
                     ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

                     ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

                     ->select('fichiers.image', 'fichiers.created_at as daterecept')
                     
                     ->get();

        $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)


             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')

             
             
             ->get();
        return view('Teacher.mesetudiant', compact('Professeur', 'ProfCours', 'ProfesseurClasse', 'ClasseEtudiant'));
    }


     public function exercice()
    {

        $session_id = Auth::user()->id;

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $TypeFichier=TypeFichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        //$classe=$request['classe'];


        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('users.id', '=', $session_id)


        ->select('professeurs.id as profId','structures.struct_name','classes.id as classesId','classes.classes_name','matieres.libelle as matiereLib')
             
        ->get();

        $Exercice=DB::table('cours_profs')
                     
                     ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

                     ->join('clas_profs', 'clas_profs.id', '=' , 'cours_profs.clas_profs_id')

                     ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

                     ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

                     ->join('type_fichier', 'type_fichier.id', '=' , 'fichiers.typeFichierId')

                     ->select('cours.id as courId','fichiers.image', 'fichiers.created_at as daterecept', 'cours.title as title')
                     
                     ->get();

       $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)


             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')

             
             
             ->get();
        return view('Teacher.exercice', compact('Professeur', 'ProfesseurClasse', 'TypeFichier', 'Exercice'));
    }


      public function examen(){

        $session_id = Auth::user()->id;

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')

        ->where('users.id', '=', $session_id)


        ->select('professeurs.id as profId','structures.struct_name','classes.id as classesId','classes.classes_name','matieres.libelle as matiereLib')
             
        ->get();

        $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)

             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')
             
             ->get();

        return view('Teacher.examens', compact('Professeur', 'ProfesseurClasse'));
    }


     public function solution()
    {

        $session_id = Auth::user()->id;

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $TypeFichier=TypeFichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        $ProfCours=DB::table('cours_profs')
                     
                     ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

                     ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

                     ->join('type_fichier', 'type_fichier.id', '=' , 'fichiers.typeFichierId')

                     ->select('cours.id as courId','fichiers.image', 'fichiers.created_at as daterecept', 'cours.title as title')
                     
                     ->get();

        $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->where('users.id', '=', $session_id)


        ->select('structures.struct_name','classes.id as classesId','classes.classes_name')
             
        ->get();

       $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')
             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)


             ->select('users.id', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')

             ->get();

        return view('Teacher.solution', compact('Professeur', 'ProfesseurClasse', 'TypeFichier', 'ProfCours'));
    }

    public function notation()
    {

        $session_id = Auth::user()->id;

        $Cour=Cour::all();
        $Fichiers=Fichier::all();
        $CoursProf=CoursProf::all();
        $ClasProf=ClasProf::all();
        $Structure=Structure::all();

        $ClasseEtudiant=DB::table('clas_profs')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->join('students', 'students.classes_id', '=' , 'clas_profs.classes_id')

        ->join('users', 'students.users_id', '=' , 'users.id')

        ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->select('students.id as etudiantId','users.name', 'users.prenom')
             
        ->get();

        $ProfCours=DB::table('cours_profs')
                     
                     ->join('cours', 'cours.id', '=' , 'cours_profs.cours_id')

                     ->join('fichiers', 'cours.id', '=' , 'fichiers.cours_id')

                     ->join('type_fichier', 'type_fichier.id', '=' , 'fichiers.typeFichierId')

                     ->select('cours.id as courId','fichiers.image', 'fichiers.created_at as daterecept', 'cours.title as title')
                     
                     ->get();
    

       $ProfesseurClasse=DB::table('professeurs')

        ->join('users', 'users.id', '=' , 'professeurs.users_id')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

        ->join('clas_profs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')

        ->join('classes', 'classes.id', '=' , 'clas_profs.classes_id')

        ->where('users.id', '=', $session_id)

        ->select('structures.struct_name','classes.id as classesId','classes.classes_name')
             
        ->get();


       $Professeur=DB::table('users')

        ->join('structures', 'structures.id', '=' , 'users.structures_id')

             ->join('classes', 'structures.id', '=' , 'classes.structure_id')

             ->join('niveau_specialites', 'classes.niveausp_id', '=' , 'niveau_specialites.id')

             ->join('specialites', 'specialites.id', '=' , 'niveau_specialites.specialites_id')

             ->join('niveaux', 'niveaux.id', '=' , 'niveau_specialites.niveaux_id')

             ->join('clas_profs', 'classes.id', '=' , 'clas_profs.classes_id')

             ->join('matieres', 'matieres.id', '=' , 'clas_profs.matieres_id')
             
             ->join('professeurs', 'professeurs.id', '=' , 'clas_profs.professeurs_id')
             
             ->where('users.id', '=', $session_id)


             ->select('users.id as userId', 'users.name', 'users.prenom', 'users.email','users.tel','users.role','structures.id As structId','structures.struct_name','classes.id as classesId','classes.classes_name','classes.montant','niveaux.id as niveauxId','niveaux.libelle','specialites.id as speId','specialites.type','matieres.id as matiereId','matieres.libelle as matiereLib','matieres.niveau as matiereNiv','professeurs.id as profId', 'professeurs.matricule','clas_profs.id as clasproId')
             
             ->get();

        return view('Teacher.note', compact('Professeur', 'ProfesseurClasse', 'ClasseEtudiant', 'ProfCours'));
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
    public function storeCourse(Request $request)
    {
           
        $User=new User();
        $Cours=new Cour();
        $Fichier=new Fichier();
        $typeFichier=new TypeFichier();
        $Prof=new Professeur();
        $Classprof=new ClasProf();
        $CoursProf=new CoursProf();

         /*-------------User request----------------*/

        $title=$request['title'];
        $desc=$request['description'];
        $clasproId = $request['clasproId'];
        $typefichier_id = $request['typefichier_id'];

        //$typefichier=TypeFichier::find($typefichier_id);

        $Cours->title=$title;
        $Cours->description=$desc;
        $Cours->etat=1;

        if ($Cours->save()) {
            
            $getLastCoursId = $Cours->id;

            $CoursProf->cours_id = $getLastCoursId;
            $CoursProf->clas_profs_id = 1;
            $CoursProf->statut = 1;

                if ($CoursProf->save()) {
                    
                    $Fichier->cours_id = $getLastCoursId;

                     $filecourse=$request->file('image');

                     $file_name= $title. '.' . $filecourse->
                     getClientOriginalExtension();
                     $filecourse->move(public_path('cours'), $file_name);

                     $Fichier->image = $file_name;
                     $Fichier->typeFichierId = $typefichier_id;
                     $Fichier->statut = 1;
                     $Fichier->save();

                     return redirect()->route('Professeur.cours')->with('status','Votre cours a été envoyé avec succès');
                }
    }

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Professeur $professeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professeur $professeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professeur  $professeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professeur $professeur)
    {
        //
    }
}
