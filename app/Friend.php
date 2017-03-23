<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [
        'name',
        'address',
        'created_by',
        'updated_by',
        'revisions',
    ];
}
