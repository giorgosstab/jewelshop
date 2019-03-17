<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;
use TCG\Voyager\Traits\Resizable;

class Brand extends Model
{
    use Resizable;
    use Visitable;

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
