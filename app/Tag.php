<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){
        // Any post have many tags
        // Any tag may apply to many posts

        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName(){
        return 'name';
    }
}
