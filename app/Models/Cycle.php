<?php



namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Class
 * 
 * @property int $id
 * @property string $libelle
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Cycle extends Model
{
	protected $table = 'cycle';

	protected $casts = [
		'id' => 'int',
		'libelle' => 'string'
	];

	protected $fillable = [
		'libelle',
	];

	public function cycle()
	{
		return $this->belongsTo(Cycle::class);
	}
	
	
}
