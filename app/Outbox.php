<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Scout\Searchable;

class Outbox extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'inbox_id',
        'subject',
        'message',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function inbox()
    {
        return $this->belongsTo('App\Inbox');
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
            'subject' => $this->subject,
        ];
    }

    public static function pagination($path = "http://dashboard.dev/outbox")
    {
        if ($path == "http://dashboard.dev/outbox"){
            $allOutboxes = Outbox::orderBy('created_at', 'desc')->get();
        }else{
            $allOutboxes = Outbox::onlyTrashed()->orderBy('created_at', 'desc')->get();
        }
        $outboxesArray = [];
        foreach ($allOutboxes as $outbox){
            $outboxesArray[] = $outbox;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;

        $outboxes = new LengthAwarePaginator(array_slice($outboxesArray, $offset, $perPage, true),
            count($outboxesArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $outboxes;
    }
}
