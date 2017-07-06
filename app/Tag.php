<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Tag extends Model
{
    protected $fillable = [
        'tag',
=======
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Tag extends Model
{
    use SoftDeletes;
    use Searchable;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
        'created_by',
        'updated_by',
        'revisions',
    ];
}
