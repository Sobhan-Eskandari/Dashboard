<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Friend extends Model
{
    protected $fillable = [
        'site_name',
        'address',
        'created_by',
        'updated_by',
        'revisions',
    ];
}
