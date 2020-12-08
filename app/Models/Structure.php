<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Structure
 * 
 * @property int $id
 * @property string $struct_name
 * @property string $code
 * @property string $adresse
 * @property string $email
 * @property string $tel
 * @property string $statut
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Class[] $classes
 *
 * @package App\Models
 */
class Structure extends Model
{
	protected $table = 'structures';

	protected $fillable = [
		'struct_name',
		'code',
		'adresse',
		'email',
		'tel',
		'statut'
	];

}
