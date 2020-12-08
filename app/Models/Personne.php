<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personne
 * 
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property Carbon $datenais
 * @property string $lieunais
 * @property string $adresse
 * @property string $tel
 * @property string $photo
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Personne extends Model
{
	protected $table = 'personnes';

	protected $dates = [
		'datenais'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'datenais',
		'lieunais',
		'adresse',
		'tel',
		'photo',
		'email'
	];
}
