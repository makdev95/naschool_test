<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Professeur
 * 
 * @property int $id
 * @property string $matricule
 * @property int $users_id
 * @property string $cv
 * @property bool $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Evaluation[] $evaluations
 *
 * @package App\Models
 */
class Professeur extends Model
{
	protected $table = 'professeurs';

	protected $casts = [
		'users_id' => 'int',
		'statut' => 'bool'
	];

	protected $fillable = [
		'matricule',
		'users_id',
		'cv',
		'statut'
	];

	public function evaluations()
	{
		return $this->hasMany(Evaluation::class, 'professeurs_id');
	}
}
