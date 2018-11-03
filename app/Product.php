<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice() {
        return number_format($this->price, 2);
    }
    public function presentPriceDeals() {
        if($this->secondprice == null) {
            return null;
        } else {
            return number_format($this->secondprice, 2);
        }

    }
}
