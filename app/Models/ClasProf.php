<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ClasProf
 * 
 * @property int $id
 * @property int $professeurs_id
 * @property int $classes_id
 * @property int $matieres_id
 * @property int $montant
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Matiere $matiere
 * @property Class $class
 *
 * @package App\Models
 */
class ClasProf extends Model
{
	protected $table = 'clas_profs';

	protected $casts = [
		'professeurs_id' => 'int',
		'classes_id' => 'int',
		'matieres_id' => 'int',
		'montant' => 'int'
	];

	protected $fillable = [
		'professeurs_id',
		'classes_id',
		'matieres_id',
		'montant'
	];

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'matieres_id');
	}

	public function classe()
	{
		return $this->belongsTo(Classe::class, 'classes_id');
	}

	public function clas_profs()
	{
		return $this->hasMany(CoursProf::class, 'cours_id');
	}
}
