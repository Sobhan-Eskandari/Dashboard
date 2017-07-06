<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role'
    ];

    public function admins()
    {
        return $this->hasMany('App\Admin');
    }
}
