<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','billing_fname','billing_lname','billing_address','billing_housenumber','billing_locality','billing_email',
        'billing_city','billing_phone','billing_country','billing_postalcode','different_shipping_address','second_billing_fname','second_billing_lname',
        'second_billing_address','second_billing_housenumber','second_billing_locality','second_billing_email','second_billing_city','second_billing_phone',
        'second_billing_country','second_billing_postalcode','billing_discount','billing_discount_code','billing_subtotal','billing_tax','billing_total',
        'delivery_gateway','payment_gateway','name_on_card','shipped','error'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
