<?php

namespace App;

<<<<<<< HEAD
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
=======
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use SoftDeletes;
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected $fillable = [
        'name', 'email', 'password',
=======
=======
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
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
<<<<<<< HEAD
        'mobil',
=======
        'mobile',
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
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
<<<<<<< HEAD

>>>>>>> 6cbc4625ebac1ef4ce2a0596954b89c7fff516b3
=======
        'about',
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
=======

    public function faqs()
    {
        return $this->hasMany('App\FAQ', 'created_by');
    }

    public function categories()
    {
        return $this->hasMany('App\Category', 'created_by');
    }

    public function outboxes()
    {
        return $this->hasMany('App\Outbox', 'created_by');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
}
