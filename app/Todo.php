<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    protected $fillable = [
        'task',
        'done',
        'done_at',
        'user_id',
    ];

    public function user() {
        $this->belongsTo(User::class);
    }
}
