<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Admin=Admin::all();
        $School=Structure::all();

        return view('superadmin.addschool', compact('School','Admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.addschool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $School=new Structure();
        $Admin=new Admin();
        $User=new User();

        /*-------------School request----------------*/
        $nom=$request['nom'];
        $code=$request['code'];
        $tel=$request['tel'];
        $adresse=$request['adresse'];
        $email=$request['email'];
        $st=0;

        /*-------------User request----------------*/
        $name=$request['name'];
        $prenom=$request['prenom'];
        $tel_admin=$request['tel_admin'];
        $adresse_admin=$request['adresse_admin'];
        $email_admin=$request['email_admin'];
        $role=$request['role'];
        $structures_id=$request['structures_id'];
        $password=Hash::make($request['password']);
        

        $School->struct_name=$nom;
        $School->code=$code;
        $School->tel=$tel;
        $School->adresse=$adresse;
        $School->email=$email;
        $School->statut=$st;

        
        if($School->save()){

        $structures_id= $School->id;

            $User->name=$name;
            $User->prenom=$prenom;
            $User->tel=$tel_admin;
            $User->role=$role;
            $User->email=$email_admin;
            $User->structures_id=$structures_id;
            $User->password=$password;
            $User->adresse=$adresse_admin;

            $User->save();

            return redirect()->route('SuperAdmin-Add-Admins-schools')->with('status','Ecole ajoutée avec succès');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function show(Structure $structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function edit(Structure $structure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Structure $structure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Structure  $structure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Structure $structure)
    {
        //
    }
}
