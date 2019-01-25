<?php

namespace App;

use function array_merge;
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
        if($this->secondprice == null || $this->secondprice == 0) {
            return null;
        } else {
            return number_format($this->secondprice / 100,2,'.',',');
        }
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...
        $extraFields = [
            'categories' => $this->categoriesJewels()->pluck('name')->toArray(),
        ];

        return array_merge($array,$extraFields);
    }
}
