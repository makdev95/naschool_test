<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Parent
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property Carbon $datenais
 * @property string $lieunais
 * @property string $adresse
 * @property string $tel
 * @property string $profession
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Tuteur extends Model
{
	protected $table = 'parents';

	protected $dates = [
		'email_verified_at',
		'datenais'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'datenais',
		'lieunais',
		'adresse',
		'tel',
		'profession',
		'password'
	];
}
