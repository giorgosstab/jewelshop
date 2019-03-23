<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Statuses.
     */
    const STATUS_ORDER_PENDING = 'PENDING';
    const STATUS_ORDER_CONFIRMED = 'CONFIRMED';
    const STATUS_ORDER_PAIDED = 'PAIDED';
    const STATUS_ORDER_SENTED = 'SENTED';
    const STATUS_ORDER_CANCELLED = 'CANCELLED';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [
        self::STATUS_ORDER_PENDING,
        self::STATUS_ORDER_CONFIRMED,
        self::STATUS_ORDER_PAIDED,
        self::STATUS_ORDER_SENTED,
        self::STATUS_ORDER_CANCELLED
    ];

    protected $fillable = [
        'unique_id','user_id','billing_fname','billing_lname','billing_address','billing_housenumber','billing_locality','billing_email',
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

    public function presentSubTotal() {
        return number_format($this->billing_subtotal / 100,2,'.',',');
    }
    public function presentTax() {
        return number_format($this->billing_tax / 100,2,'.',',');
    }
    public function presentTotal() {
        return number_format($this->billing_total / 100,2,'.',',');
    }
    public function presentDiscount() {
        return number_format($this->billing_discount / 100,2,'.',',');
    }
}
