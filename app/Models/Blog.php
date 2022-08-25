<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->whereNull('parent_id');
    }

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }
}
