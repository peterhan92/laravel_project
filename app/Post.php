<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;

class Post extends Model
{
    # fillable fields for a post
    protected $fillable = [
		'title',
		'body'
    ];

    // # additional fields to treat as Carbon instances
    // protected $dates = ['published_at'];

    // # Set the published_at attribute
    // public function setPublishAtAttribute($date) 
    // {
    // 	$this->attributes['published_at'] = Carbon::parse($date);
    // }

    // # scope queries to posts that have been published
    // public function scopePublished($query) 
    // {
    // 	$query->where('published_at', '<=', Carbon::now());
    // }

    # a post belongs to a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    # Get the tags associated with the given article
    public function tags()
    {
        return $this-> belongsToMany('App\Tag')->withTimestamps();
    }

    #Get a list of tag ids associated with the current article
    public function getTagListAttribute()
    {
        return $this->tags->lists('id')->all();
    }
}
