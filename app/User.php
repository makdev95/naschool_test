<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'prenom', 'email', 'tel','role', 'adresse', 'structures_id','photo','datenaiss','lieunaiss','sexe', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_Teacher(){

        if($this->role == "Professeur"){

            return true;
        }
    }
    public function is_student(){

        if($this->role == "Etudiant"){

            return true;
        }
    }

    public function is_trainee(){

        if($this->role == "Intern"){

            return true;
        }
    }

    public function is_Admin(){

        if($this->role == "Admin"){

            return true;
        }
    } 

    public function isOnline(){
        
        return Cache::has('student-is-online-'.$this->id);
    }
}
