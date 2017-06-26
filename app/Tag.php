<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use SoftDeletes;
    use Searchable;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'created_by',
        'updated_by',
        'revisions',
    ];
}
