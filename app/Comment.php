<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //voyager relationships
    public function userId(){
        return $this->belongsTo('App\User');
    }

    //custom relationships
    public function post(){
        return $this->belongsTo('App\BlogPost','blog_post_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function replies() {
        return $this->hasMany('App\Reply', 'comment_id');
    }
}
