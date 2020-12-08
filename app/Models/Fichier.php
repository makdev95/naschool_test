<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fichier
 * 
 * @property int $id
 * @property int $cours_id
 * @property string $image
 * @property bool $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Fichier extends Model
{
	protected $table = 'fichiers';

	protected $casts = [
		'cours_id' => 'int',
		'statut' => 'bool'
	];

	protected $fillable = [
		'cours_id',
		'image',
		'statut'
	];

	public function cours()
	{
		return $this->belongsTo(Cour::class, 'cours_id');
	}
}
