<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cour
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property bool $etat
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Cour extends Model
{
	protected $table = 'cours';

	protected $casts = [
		'etat' => 'bool'
	];

	protected $fillable = [
		'title',
		'description',
		'etat'
	];

	public function comments()
	{
		return $this->hasMany(Comment::class, 'cours_id');
	}

	public function coursprofs()
	{
		return $this->hasMany(CoursProf::class, 'cours_id');
	}

	public function fichiers()
	{
		return $this->hasMany(Fichier::class, 'cours_id');
	}
}
