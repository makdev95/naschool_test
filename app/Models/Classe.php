<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Class
 * 
 * @property int $id
 * @property string $classes_name
 * @property int $structure_id
 * @property int $niveausp_id
 * @property int $montant
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Structure $structure
 * @property Collection|ClasProf[] $clas_profs
 *
 * @package App\Models
 */
class Classe extends Model
{
	protected $table = 'classes';

	protected $casts = [
		'structure_id' => 'int',
		'niveausp_id' => 'int',
		'montant' => 'int'
	];

	protected $fillable = [
		'classes_name',
		'structure_id',
		'niveausp_id',
		'montant'
	];

	public function structure()
	{
		return $this->belongsTo(Structure::class);
	}

	public function clas_profs()
	{
		return $this->hasMany(ClasProf::class, 'classes_id');
	}
}
