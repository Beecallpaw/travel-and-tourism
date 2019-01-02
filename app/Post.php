<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'name', 'image', 'description', 'itinerary', 'category_id', 'slug', 'featured'
    ];

    public function getImageAttribute($image)
    {
        return asset($image);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
