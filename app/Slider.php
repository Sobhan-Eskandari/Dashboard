<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'caption',
    ];

    public function photos() {
        return $this->morphToMany(Photo::class, 'photoable');
    }

    public function admin() {
        return $this->belongsTo(Admin::class, 'created_by');
    }
}
