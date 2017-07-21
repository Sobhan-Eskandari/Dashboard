<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Scout\Searchable;

class Comment extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'full_name',
        'message',
        'subject',
        'seen',
        'status',
        'tracking_code',
        'answered_at',
        'answered_by',
        'seen_by',
        'updated_by',
        'post_id',
        'user_id',
        'parent_id',
    ];
    public static function pagination()
    {
        $allComments = Comment::orderByRaw('updated_at desc')->get();
        $commentsArray = [];
        foreach ($allComments as $comment){
            $commentsArray[] = $comment;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;
        $path = "http://dash.dev/comments";

        $comments = new LengthAwarePaginator(array_slice($commentsArray, $offset, $perPage, true),
            count($commentsArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $comments;
    }
    public function children()
    {
        return $this->hasMany('App\Comment','parent_id');
    }
    public function parent(){
        return $this->belongsTo('App\Comment');
    }
    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'subject' => $this->subject,
            'message'=>$this->message,
        ];
    }

}
