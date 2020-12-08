<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 * 
 * @property int $id
 * @property string $observation
 * @property float $note
 * @property int $students_id
 * @property int $professeurs_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Student $student
 * @property Professeur $professeur
 *
 * @package App\Models
 */
class Evaluation extends Model
{
	protected $table = 'evaluations';

	protected $casts = [
		'note' => 'float',
		'students_id' => 'int',
		'fichiers_id' => 'int',
		'professeurs_id' => 'int'
	];

	protected $fillable = [
		'observation',
		'note',
		'students_id',
		'fichiers_id',
		'professeurs_id'
	];

	public function student()
	{
		return $this->belongsTo(Student::class, 'students_id');
	}

	public function professeur()
	{
		return $this->belongsTo(Professeur::class, 'professeurs_id');
	}
}
