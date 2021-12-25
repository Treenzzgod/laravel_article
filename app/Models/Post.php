<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'post';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'category_id',
        'excerpt',
        'body',
        'published_at'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array
    {
        return[
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
