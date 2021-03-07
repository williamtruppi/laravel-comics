<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Must extends Model
{
    protected $fillable = ["title", "subtitle", "content", "slug", "img"];

    public function getRouteKeyName ()
    {
        return 'slug';
    }
}
