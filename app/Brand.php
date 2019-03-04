<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Brand extends Model
{
    use Resizable;

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
