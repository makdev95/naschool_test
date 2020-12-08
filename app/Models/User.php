<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $prenom
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $role
 * @property int $structures_id
 * @property string|null $tel
 * @property string|null $adresse
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $casts = [
		'structures_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'prenom',
		'email',
		'email_verified_at',
		'role',
		'photo',
		'sexe',
		'datenaiss',
		'lieunaiss',
		'structures_id',
		'tel',
		'adresse',
		'password',
		'remember_token'
	];


	public function is_student(){

        if($this->role == "Etudiant"){

            return true;
        }
    }
}
