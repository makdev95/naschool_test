<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NiveauSpecialite
 * 
 * @property int $id
 * @property int $niveaux_id
 * @property int $specialites_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class NiveauSpecialite extends Model
{
	protected $table = 'niveau_specialites';

	protected $casts = [
		'niveaux_id' => 'int',
		'specialites_id' => 'int'
	];

	protected $fillable = [
		'niveaux_id',
		'specialites_id'
	];

	public function niveaux()
	{
		return $this->belongsTo(Niveau::class, 'niveaux_id');
	}


	public function specialite()
	{
		return $this->belongsTo(specialite::class, 'specialites_id');
	}
}
