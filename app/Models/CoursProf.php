<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CoursProf
 * 
 * @property int $cours_id
 * @property int $clas_profs_id
 * @property bool $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CoursProf extends Model
{
	protected $table = 'cours_profs';
	public $incrementing = false;

	protected $casts = [
		'cours_id' => 'int',
		'clas_profs_id' => 'int',
		'statut' => 'bool'
	];

	protected $fillable = [
		'cours_id',
		'clas_profs_id',
		'statut'
	];

	public function cours()
	{
		return $this->belongsTo(Cour::class, 'cours_id');
	}

	public function clasprofs()
	{
		return $this->belongsTo(ClasProf::class, 'clas_profs_id');
	}
}
