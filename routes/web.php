<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routesf for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('Naschool/Connexion', function () {
    return view('auth.login');
})->name('connexion');

Route::get('Naschool/Connexion/Admin', function () {
    return view('loginAdmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login','LoginUserController@login')->name('Naschool.login');

/* ========================naschool info   =========================================================================*/

Route::get('info/accueil', function () {
    return view('presentation.naschool');
})->name('naschool-info');

Route::get('info/contactez-nous', function () {
    return view('presentation.contact');
})->name('naschool-contact');


Route::get('info/nous-decouvrir', function () {
    return view('presentation.about');
})->name('naschool-about');



/*========================Super Admin sfarit control=============================================================*/

Route::get('SuperAdmin/AjouterUser', function () {
    return view('superadmin.Adduser');
})->name('admin-add-user');

Route::get('SuperAdmin/AjouterAdminSchool', function () {
    return view('superadmin.Addadmin');
})->name('admin-add-admin');


Route::get('SuperAdmin/Dash', 'SuperadminController@index')->name('SuperAdmin-Dash');

Route::get('Superadmin/Dash/Ecole', 'StructureController@index')->name('SuperAdmin-Add-Admins-schools');

Route::get('/Naschool/SuperAdmin','Auth\AdminSupLoginController@showLoginForm')->name('supadmin-login-form');

Route::get('/Naschool/SuperAdmin/Creation','Auth\AdminSupLoginController@showCreateUser')->name('supadmin-create-form');

Route::post('/Naschool/SuperAdmin/Creation/Superadmin','Auth\AdminSupLoginController@RegisterSupAdmin')->name('supadmin-create-sup');

Route::post('/Naschool/SuperAdmin','Auth\AdminSupLoginController@login')->name('supadmin.login');

Route::get('/Naschool/SuperAdmin','Auth\AdminSupLoginController@logout')->name('supadmin.logout');



/*======================REST ROOT============================*/

Route::resource('Structure','structureController');
Route::resource('Admin','AdminController');
Route::resource('student','StudentController');
Route::resource('niveau','NiveauController');
Route::resource('specialite','SpecialiteController');
Route::resource('cycle','CycleController');
Route::resource('niveauspecialite','NiveauSpecialiteController');
Route::resource('matiere','MatiereController');
Route::resource('cour','CourController');
Route::resource('classe','ClasseController');
Route::resource('user','UserController');
Route::resource('matiere','MatiereController');
Route::resource('professeur','ProfesseurController');
Route::resource('commentaire','CommentaireController');
Route::resource('affectClasse','affectClasseController');
Route::resource('tuteur','tuteurController');
Route::resource('evaluation','EvaluationController');

/*=====================================================================*/



/*=====================Admin school panel==================*/

Route::get('/Admin/Resume', function () {
    return view('Admin.viewResume');
});

Route::get('/Naschool/Admin', 'AdminUserController@index')->name('Home_Admin');

Route::get('/Naschool/Admin/AffecterProfesseur', 'AdminUserController@affecter')->name('Affecter-Professeur');

Route::get('admin/tuteur/paiement', 'AdminUserController@GetStudentFee')->name('Tuteur-paie');

Route::get('/Naschool/Admin/Etudiant', function () {
    return view('Admin.student');
})->name('Admin.student');

Route::get('/admin/tuteurs', 'AdminUserController@tuteurs')->name('Admin.tuteur');

Route::get('/Naschool/Admin/Classe/Ajouter', function () {
    return view('Admin.addclasse');
});

Route::get('/Naschool/Dashboard', function () {
    return view('Dashboard.index');
});

Route::get('/Naschool/Admin/User', function () {
    return view('Admin.adduser');
})->name('Admin.adduser');

Route::get('/Naschool/Admin/School', 'ClassController@index')->name('Admin.school');

Route::get('/Naschool/Dean', function () {
    return view('Dean.index');
});

/*================= Fin Admin school panel==================*/

// ========-------- Teacher panel ----------===============

Route::get('/Naschool/Teacher', function () {
    return view('Teacher.index');
})->name('Teacher.index');

Route::get('/Naschool/Professeur', 'ProfUserController@index')->name('Professeur.home');

Route::get('/professeur/Cours', 'ProfUserController@cours')->name('Professeur.cours');

Route::get('/matieres/voir', 'MatiereController@voir')->name('matiere-voir');

Route::get('professeur/Cours/comment', 'ProfUserController@comment')->name('Professeur.comment');

Route::post('professeur/Cours/commentez', 'ProfUserController@commentCours')->name('Professeur.commenter');

Route::get('/professeur/Cours/Fichier', 'ProfUserController@voircours')->name('Professeur.VoirCours');

Route::get('/professeur/Classe/Etudiant', 'ProfUserController@mestudiant')->name('Professeur.mestudiant');

Route::get('/professeur/Exercices', 'ProfUserController@exercice')->name('Professeur.exercice');

Route::get('/professeur/examens', 'ProfUserController@examens')->name('Professeur.examens');

Route::get('/professeur/Solutions', 'ProfUserController@solution')->name('Professeur.solution');

Route::get('/professeur/Notation', 'ProfUserController@notation')->name('Professeur.note');

// Root Ajouter un fichier (Exercice-Solution-Cours)
Route::post('/professeur/Cours/ajouter', 'ProfUserController@storeCourse')->name('Professeur.addcours');

Route::get('/Naschool/Teacher/Ajouter', function () {
    return view('Teacher.ajouter');
});


// ======================= Student roots ===============================

Route::get('/etudiant', 'StudentUserController@index')->name('Etudiant.home');

Route::get('etudiant/matieres', 'StudentUserController@mescours')->name('Etudiant.mescours');

Route::get('etudiant/Devoir', 'StudentUserController@devoir')->name('Etudiant.devoir');

Route::get('etudiant/exercices', 'StudentUserController@exercice')->name('Etudiant.exercice');

Route::get('etudiant/cours', 'StudentUserController@cour')->name('Etudiant.cour');

Route::get('etudiant/notes', 'StudentUserController@notes')->name('Etudiant.notes');

Route::get('etudiant/contenu-matieres', 'StudentUserController@showContenuCours')->name('Etudiant.contenuMat');

Route::get('/Naschool/Etudiant/Learning', function () {
    return view('Etudiant.learn');
});

Route::get('etudiant/cours/comment', 'StudentUserController@courseChat'
)->name('Etudiant.courseChat');

Route::get('etudiant/cours/commentaire', function () {
    return view('Etudiant.comment');
});
Route::get('/Naschool/Etudiant/Learning/Comptabilite', function () {
    return view('Etudiant.MatiereDetails');
});

/*=====================================================================*/


/* ================== ROOT Parents =========================*/

Route::get('/espace/tuteur', 'TuteurUserController@index')->name('tuteur-home');

Route::get('/login/tuteur', function () {
    return view('auth.loginparent');
})->name('login-parent');

Route::post('/tuteur/login','LoginTuteurController@login')->name('tuteur.login');

Route::get('/tuteur/logout','LoginTuteurController@logout')->name('tuteur-logout');

Route::get('/espace/tuteur/notes','TuteurUserController@notes')->name('tuteur.notes');

Route::get('/espace/tuteur/devoirs','TuteurUserController@devoirs')->name('tuteur.devoirs');



/* ==================== sfarit academy ====================*/
Route::get('/Sfarit-training', function () {
    return view('sfarit-academy.Intern');
});

Route::get('/Training', function () {
    return view('intern.program');
});

Route::get('/Training/Program/Web', function () {
    return view('intern.program');
});

Route::get('/Training', function () {
    return view('intern.home');
})->name('Home_trainee');

/*********************************************/

Route::get('/Recu', function () {
    return view('recu');
});

Route::get('/ESD', function () {
    return view('ESD');
});

Route::get('/lona', function () {
    return view('lona');
});