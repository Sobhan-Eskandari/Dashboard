<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
=======

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
>>>>>>> 6cbc4625ebac1ef4ce2a0596954b89c7fff516b3

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD

=======
    use SoftDeletes;
>>>>>>> 6cbc4625ebac1ef4ce2a0596954b89c7fff516b3
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = [
        'name', 'email', 'password',
=======
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'avatar',
        'user_name',
        'first_name',
        'last_name',
        'email',
        'role_id',
        'password',
        'land_line',
        'mobil',
        'address',
        'zip',
        'gender',
        'occupation',
        'verified',
        'created_by',
        'updated_by',
        'email_token',
        'revisions',
        'last_seen',

>>>>>>> 6cbc4625ebac1ef4ce2a0596954b89c7fff516b3
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
