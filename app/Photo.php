<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    protected $fillable = [
        'name',
        'order',
        'position',
        'created_by',
    ];

    public function setting() {
        return $this->belongsTo(Setting::class, 'created_by');
    }

    public function slider() {
        return $this->morphToMany(Slider::class, 'photoable');
    }
}
