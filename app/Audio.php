<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Audio extends Model
{
    protected $fillable = [
        'address',
=======
use Illuminate\Database\Eloquent\SoftDeletes;

class Audio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'address',
        'position',
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
        'created_by',
    ];
}
