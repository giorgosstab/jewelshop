<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //voyager relationships
    public function commentId(){
        return $this->belongsTo('App\Comment','comment_id');
    }

    //custom relationships
    public function post(){
        return $this->belongsTo('App\BlogPost','blog_post_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comment(){
        return $this->belongsTo('App\Comment');
    }
}
