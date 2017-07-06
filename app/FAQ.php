<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
=======
use Hamcrest\Thingy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use Morilog\Jalali\jDate;
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023

class FAQ extends Model
{
    use SoftDeletes;
<<<<<<< HEAD
=======
    use Searchable;
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'question',
        'answer',
        'revisions',
        'created_by',
        'updated_by',
    ];
<<<<<<< HEAD
=======

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

    public static function pagination()
    {
        return FAQ::with('user')->orderBy('updated_at', 'desc')->get();
    }
>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
}
