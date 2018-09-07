<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
	protected $fillable = [
		'model',
		'make',
		'year',
		'mods',
		'picture'
	];
}
