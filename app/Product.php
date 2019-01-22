<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Resizable;
    use Searchable;
    public function categoriesJewels() {
        //return $this->belongsToMany('App\CategoryJewel', 'category_jewel_product')->withPivot('category_parent_id');
        return $this->belongsToMany('App\CategoryJewel');
    }
    public function presentPrice() {
        return number_format($this->price / 100,2,'.',',');
    }
    public function presentPriceDeals() {
        if($this->secondprice == null) {
            return null;
        } else {
            return number_format($this->secondprice, 2);
        }
    }
}
