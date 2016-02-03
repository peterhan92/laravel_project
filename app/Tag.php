<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	# fillable fields for a tag.
	protected $fillable = [
		'name'
	];
	# have the articles associated with the given tag
    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}
