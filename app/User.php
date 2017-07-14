<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Passport\HasApiTokens;
use Laravel\Scout\Searchable;

class User extends Authenticatable
{
    use HasApiTokens;
    use Notifiable;
    use SoftDeletes;
    use Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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
        return $this->hasMany('App\FAQ');
    }

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'user_name' => $this->user_name,
            'email'=>$this->email,
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
        ];
    }
    public static function pagination()
    {
        $allUsers = User::orderByRaw('updated_at desc')->get();
        $usersArray = [];
        foreach ($allUsers as $user){
            $usersArray[] = $user;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;
        $path = "http://dash.dev/users";

        $users = new LengthAwarePaginator(array_slice($usersArray, $offset, $perPage, true),
            count($usersArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $users;
    }
    public function photo(){
        return $this->belongsTo('App\Photo','avatar');
    }
}
