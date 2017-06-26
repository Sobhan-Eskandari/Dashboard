<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Inbox extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'full_name',
        'email',
        'message',
        'subject',
        'seen',
        'status',
        'tracking_code',
        'answered_at',
        'answered_by',
        'seen_by',
    ];

    public function outbox()
    {
        return $this->hasOne('App\Outbox');
    }
}
