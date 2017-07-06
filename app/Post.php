<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];
=======
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
        'locked_by',
        'revisions',
    ];

    public static function pagination($path = "http://dashboard.dev/posts")
    {
        if ($path == "http://dashboard.dev/posts"){
            $allPosts = Post::with(['updater', 'creator', 'categories', 'tags'])->orderBy('updated_at', 'desc')->get();
        }else{
            $allPosts = Post::with(['updater', 'creator', 'categories', 'tags'])->onlyTrashed()->orderBy('updated_at', 'desc')->get();
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
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
}
