<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag',
        'created_by',
        'updated_by',
        'revisions',
    ];
}
