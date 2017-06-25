<?php

namespace App;

use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Morilog\Jalali\jDate;

class FAQ extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'question',
        'answer',
        'revisions',
        'created_by',
        'updated_by',
    ];

    public function getCreateDateAttribute(){
        return $this->created_at->format('y/m/d');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
