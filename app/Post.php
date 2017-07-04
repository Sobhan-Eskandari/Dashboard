<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
