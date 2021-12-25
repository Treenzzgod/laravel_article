<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $guarded = ['id'];

    public function getRouteKeyName(){
        return 'slug';
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
