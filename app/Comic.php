<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{

    protected $fillable = ["title", "description", 'slug', 'img_cover', 'available', 'price', 'series', 'volume', 'page_count', 'rated'];

    public function getRouteKeyName ()
    {
        return 'slug';
    }

    public function writers ()
    {
        return $this->belongsToMany('App\Writer');
    } 

    public function artists ()
    {
        return $this->belongsToMany('App\Artist');
    }

    
}
