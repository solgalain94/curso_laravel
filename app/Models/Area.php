<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';
	protected $primaryKey = 'id';
	protected $fillable = ['nombre', 'sector'];

	public $timestamps = true;
}
