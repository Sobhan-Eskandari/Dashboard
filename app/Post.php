<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $fillable = [
        'title',
        'body',
        'views',
        'lock',
        'draft',
        'created_by',
        'updated_by',
        'updated_at',
        'locked_by',
        'revisions',
    ];

    public static function pagination($path = "http://dashboard.dev/posts", $draft = 0)
    {
        if ($path == "http://dashboard.dev/posts-trash"){
            $allPosts = Post::with(['updater', 'creator', 'categories', 'tags'])->onlyTrashed()->orderBy('updated_at', 'desc')->get();
        }else{
            $allPosts = Post::with(['updater', 'creator', 'categories', 'tags'])->where('draft', $draft)->orderBy('updated_at', 'desc')->get();
        }
        $postArray = [];
        foreach ($allPosts as $post){
            $postArray[] = $post;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;

        $posts = new LengthAwarePaginator(array_slice($postArray, $offset, $perPage, true),
            count($postArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $posts;
    }

    public function updater()
    {
        return $this->belongsTo('App\Admin', 'updated_by');
    }

    public function creator()
    {
        return $this->belongsTo('App\Admin', 'created_by');
    }

    public function categories()
    {
        return $this->morphToMany('App\Category', 'categorable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}
