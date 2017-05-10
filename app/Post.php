<?php

namespace App;

class Post extends Model
{
    //
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){ //$post->user->name or $comment->post->user (comment give me post give me user)
        return $this->belongsTo(User::class);
    }

    public function addComment($body){


        //$this->comments (returns collection of comment associated with post)
        $this->comments()->create(compact('body')); //also sets id because of relationship

//        $this->comments->create(['body'=>$body]);
            //or
//        Comment::create([
//            'body' => request('body'),
//            'post_id' => $this->id
//        ]);

    }
}
