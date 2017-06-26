<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Outbox extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'inbox_id',
        'subject',
        'message',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function inbox()
    {
        return $this->belongsTo('App\Inbox');
    }
}
