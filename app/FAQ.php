<?php

namespace App;

use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Morilog\Jalali\jDate;

class FAQ extends Model
{
    use SoftDeletes;
    use Searchable;

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

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'question' => $this->question,
            'answer' => $this->answer,
        ];
    }
}
