<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeFichier
 * 
 * @property int $id
 * @property string $libelle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TypeFichier extends Model
{
	protected $table = 'type_fichier';

	protected $fillable = [
		'libelle'
	];
}
