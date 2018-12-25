<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryJewelProduct extends Model
{
    protected $table = 'category_jewel_product';

    protected $fillable = [
        'product_id',
        'category_jewel_id'
    ];
}
