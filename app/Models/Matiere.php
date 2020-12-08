<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Matiere
 * 
 * @property int $id
 * @property string $libelle
 * @property string $niveau
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ClasProf[] $clas_profs
 *
 * @package App\Models
 */
class Matiere extends Model
{
	protected $table = 'matieres';

	protected $fillable = [
		'libelle',
		'niveau'
	];

	public function clas_profs()
	{
		return $this->hasMany(ClasProf::class, 'matieres_id');
	}
}
