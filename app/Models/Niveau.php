<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Niveau
 * 
 * @property int $id
 * @property string $libelle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Niveau extends Model
{
	protected $table = 'niveaux';

	protected $casts = [
		'cycle_id' => 'int'
	];

	protected $fillable = [
		'libelle',
		'cycle_id'
	];


	public function cycle()
	{
		return $this->hasMany(Cycle::class, 'cycle_id');
	}
}
