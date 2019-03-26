<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function post(){
        return $this->belongsTo('App\BlogPost','blog_post_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
