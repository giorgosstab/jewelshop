<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class CategoryJewel extends Model
{
    use Resizable;
    public function products(){
        return $this->belongsToMany('App\Product');
    }
    public function parentId(){
        return $this->belongsTo('App\CategoryJewel');
    }

//    public function parent() {
//        return $this->belongsTo('App\CategoryJewel', 'parent_id'); //get parent category
//    }
    public function children() {
        return $this->hasMany('App\CategoryJewel', 'parent_id'); //get all subs. NOT RECURSIVE
    }
    public function getCategories() {
        $categories=CategoryJewel::where('status', 'like', 'PUBLISHED')->where('parent_id',NULL)->get();//united
        $categories=$this->addRelation($categories);
        return $categories;
    }

    protected function selectChild($id) {
        $categories=CategoryJewel::where('status', 'like', 'PUBLISHED')->where('parent_id',$id)->get(); //rooney
        $categories=$this->addRelation($categories);
        return $categories;
    }

    protected function addRelation($categories) {
        $categories->map(function ($item, $key) {
            $sub=$this->selectChild($item->id);
            return $item=array_add($item,'subCategory',$sub);
        });
        return $categories;
    }
}
