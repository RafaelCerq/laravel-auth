<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }
}
