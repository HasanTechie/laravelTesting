<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    //
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    { //$post->user->name or $comment->post->user (comment give me post give me user)
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
        //$this->comments (returns collection of comment associated with post)
        $this->comments()->create(compact('body')); //also sets id because of relationship

//        $this->comments->create(['body'=>$body]);
        //or
//        Comment::create([
//            'body' => request('body'),
//            'post_id' => $this->id
//        ]);

    }

    public function scopeFilter($query, $filters)
    {
        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
            //whereMonth laravel builder's class
            //created_at and updated_at are instances of Carbon
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives(){
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')->
        groupBy('year', 'month')->
        orderByRaw('min(created_at) asc')->
        get()->
        toArray();
    }
}
