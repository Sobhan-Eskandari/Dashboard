<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Friend extends Model
{
=======
use Illuminate\Database\Eloquent\SoftDeletes;

class Friend extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
    protected $fillable = [
        'name',
        'address',
        'created_by',
        'updated_by',
        'revisions',
    ];
}
