<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function admin(){

        return $this->belongsTo(Admin::class);
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function scopePublished($query)
    {

        return $query->where('published', 1);
    }

    public function scopePremium($query)
    {

        return $query->where('premium', 1);
    }

    public function scopeSample($query)
    {

        return $query->where('premium', 0);
    }

    public function getRouteKeyName()
    {

        return 'slug' ;
    }
}
