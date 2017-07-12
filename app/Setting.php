<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_title',
        'meta_description',
        'email',
        'land_line',
        'mobile',
        'address',
        'zip',
        'instagram',
        'telegram',
        'facebook',
        'linkedin',
        'twitter',
        'aparat',
        'terms',
        'about',
        'guide',
        'header',
        'slider',
        'favicon',
        'created_by',
        'updated_by',
        'revisions',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
