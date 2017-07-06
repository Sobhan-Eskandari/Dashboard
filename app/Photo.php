<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
<<<<<<< HEAD
        'path',
        'positions',
        'order',
        'created_by'
    ];

=======
        'address',
        'position',
        'order',
        'created_by'
    ];
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
}
