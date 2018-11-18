<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryJewel extends Model
{
    public function products(){
        return $this->belongsToMany('App\Product');
    }
//    public function parent() {
//        return $this->belongsTo('App\CategoryJewel', 'parent_id'); //get parent category
//    }
//    public function children() {
//        return $this->hasMany('App\CategoryJewel', 'parent_id'); //get all subs. NOT RECURSIVE
//    }
}
