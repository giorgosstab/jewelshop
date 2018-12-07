<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryJewel extends Model
{
    public function products(){
//        return $this->belongsToMany('App\Product', 'category_jewel_product')->withPivot('category_parent_id');
        return $this->belongsToMany('App\Product');
    }
    public function parentId(){
        return $this->belongsTo('App\CategoryJewel');
    }
//    public function parent() {
//        return $this->belongsTo('App\CategoryJewel', 'parent_id'); //get parent category
//    }
//    public function children() {
//        return $this->hasMany('App\CategoryJewel', 'parent_id'); //get all subs. NOT RECURSIVE
//    }
    public function getCategories() {
        $categories=CategoryJewel::where('parent_id',NULL)->get();//united
        $categories=$this->addRelation($categories);
        return $categories;
    }

    protected function selectChild($id) {
        $categories=CategoryJewel::where('parent_id',$id)->get(); //rooney
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
