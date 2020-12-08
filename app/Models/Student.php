<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $matricule
 * @property int $classes_id
 * @property int $users_id
 * @property int|null $parents_id
 * @property bool $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Evaluation[] $evaluations
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';

	protected $casts = [
		'classes_id' => 'int',
		'users_id' => 'int',
		'parents_id' => 'int',
		'statut' => 'bool'
	];

	protected $fillable = [
		'matricule',
		'classes_id',
		'users_id',
		'parents_id',
		'statut',
		'photo',
		'datenaiss',
		'lieunaiss',
		'sexe'

	];

	public function evaluations()
	{
		return $this->hasMany(Evaluation::class, 'students_id');
	}


	public function isOnline(){
        
        return Cache::has('student-is-online-'.$this->id);
    }

    public function isMatricule($matricule){
        
        return $this->matricule;
    }

	
}
