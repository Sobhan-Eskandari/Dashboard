<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Category extends Model
{
    protected $fillable = [
        'category',
    ];
=======
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use SoftDeletes;
    use Searchable;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'category',
        'created_by',
        'updated_by',
        'revisions',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public static function pagination()
    {
        $allCategories = Category::orderByRaw('updated_at desc')->get();
        $categoriesArray = [];
        foreach ($allCategories as $category){
            $categoriesArray[] = $category;
        }

        $page = Input::get('page', 1); // Get the current page or default to 1
        $perPage = 8;
        $offset = ($page * $perPage) - $perPage;
        $path = "http://dashboard.dev/categories";

        $categories = new LengthAwarePaginator(array_slice($categoriesArray, $offset, $perPage, true),
            count($categoriesArray),
            $perPage,
            $page,
            ['path' => $path]
        );

        return $categories;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'category' => $this->category,
        ];
    }

>>>>>>> bcad798afbaa27c79c73a0ad0f50e4bcf00a2023
}
