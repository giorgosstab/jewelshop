<?php

namespace App;

use function array_merge;
use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;
use TCG\Voyager\Traits\Resizable;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Resizable;
    use Searchable;
    use Visitable;

    protected $fillable = ['quantity'];
    const PAGINATION = 16;

    public function categoriesJewels() {
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
    public function subTotalOfItem($qty) {
        return number_format(($this->price * $qty) / 100,2,'.',',');
    }

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function brandId(){
        return $this->belongsTo('App\Brand');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function shouldBeSearchable()
    {
        return $this->status !== "UNPUBLISHED";
    }

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
