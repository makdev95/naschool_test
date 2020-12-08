<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property int $cours_id
 * @property int $personnes_id
 * @property string $contenu
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cour $cour
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comment';

	protected $casts = [
		'cours_id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'cours_id',
		'users_id',
		'message'
	];

	public function cour()
	{
		return $this->belongsTo(Cour::class, 'cours_id');
	}

}
