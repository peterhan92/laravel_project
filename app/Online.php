<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Online extends Model
{
    public $table = 'sessions';

    public $timestamps = false;

    # returns all the guest users.
    public function scopeGuests($query)
    {
        return $query->whereNull('user_id');
    }

    # returns all the registered users.
    public function scopeRegistered($query)
    {
        return $query->whereNotNull('user_id')->with('user');
    }

    # updates the session of the current user.
    public function scopeUpdateCurrent($query)
    {
        return $query->where('id', Session::getId())->update(array(
            'user_id' => !empty(Auth::user()) ? Auth::user()->id : null
        ));
    }

    # users that belong to this entry
    public function user()
    {
        return $this->belongsTo('User');
    }
}
