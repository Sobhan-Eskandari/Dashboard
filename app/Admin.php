<?php

namespace App;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard = 'admin';
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
        'mobile',
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
        'about',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function faqs()
    {
        return $this->hasMany('App\FAQ', 'created_by');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag', 'created_by');
    }

    public function categories()
    {
        return $this->hasMany('App\Category', 'created_by');
    }

//    public function children()
//    {
//        return $this->hasMany('App\Admin', 'created_by');
//    }

    public function parent()
    {
        return $this->belongsTo('App\Admin', 'created_by');
    }

    public function outboxes()
    {
        return $this->hasMany('App\Outbox', 'created_by');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
}

