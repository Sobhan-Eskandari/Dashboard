<?php

namespace App;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Passport\HasApiTokens;
use Laravel\Scout\Searchable;
use Laratrust\Traits\LaratrustUserTrait;

class Admin extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens;
    use Notifiable;
    use SoftDeletes;
    use Searchable;
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

    public function sliders() {
        return $this->hasMany(Slider::class, 'created_by');
    }

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
        return $this->belongsTo('App\Admin', 'created_by')->withTrashed();
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

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'user_name' => $this->question,
            'full_name' => $this->getFullNameAttribute(),
            'email' => $this->email,
        ];
    }

    public function photos()
    {
        return $this->morphToMany('App\Photo', 'photoable');
    }

    public static function pagination()
    {
        $allAdmins = Admin::with(['parent', 'role', 'photos'])->onlyTrashed()->orderBy('updated_at', 'desc')->get();
        $adminsArray = [];
        foreach ($allAdmins as $admin){
            $adminsArray[] = $admin;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;
        $path = "http://dashboard.dev/admins/trash";

        $admins = new LengthAwarePaginator(array_slice($adminsArray, $offset, $perPage, true),
            count($adminsArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $admins;
    }

    //  Slider Methods Begins

    public function storeSlider(Slider $slider) {
        $this->sliders()->save($slider);
    }

//  Slider Methods End

}

