<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Scout\Searchable;

class Friend extends Model
{
    use Searchable;

    protected $fillable = [
        'site_name',
        'address',
        'created_by',
        'updated_by',
        'revisions',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin', 'created_by');
    }

    public static function pagination()
    {
        $allFriends = Friend::orderByRaw('updated_at desc')->get();
        $friendsArray = [];
        foreach ($allFriends as $friend){
            $friendsArray[] = $friend;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;
        $path = "http://dashboard.dev/friends";

        $Friends = new LengthAwarePaginator(array_slice($friendsArray, $offset, $perPage, true),
            count($friendsArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $Friends;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'site_name' => $this->site_name,
            'address' => $this->address,
        ];
    }
}
