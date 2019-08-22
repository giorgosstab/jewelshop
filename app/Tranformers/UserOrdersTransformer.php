<?php

namespace App\Transformer;

use App\Order;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class UserOrdersTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'products'
    ];

    public function transform(Order $order)
    {
        return [
            'id'    => (int) $order->id,
            'user_id'    => (int) $order->user->id,
            'unique_id'    => $order->unique_id,
            'billing_fname'   => $order->billing_fname,
            'billing_lname'   => $order->billing_lname,
            'billing_address'   => $order->billing_address,
            'billing_housenumber'   => $order->billing_housenumber,
            'billing_locality'   => $order->billing_locality,
            'billing_email'   => $order->billing_email,
            'billing_city'   => $order->billing_city,
            'billing_phone'   => $order->billing_phone,
            'billing_country'   => $order->billing_country,
            'billing_postalcode'   => $order->billing_postalcode,

            'different_shipping_address'   => (int) $order->different_shipping_address,

            'second_billing_fname'   => $order->second_billing_fname,
            'second_billing_lname'   => $order->second_billing_lname,
            'second_billing_address'   => $order->second_billing_address,
            'second_billing_housenumber'   => $order->second_billing_housenumber,
            'second_billing_locality'   => $order->second_billing_locality,
            'second_billing_email'   => $order->second_billing_email,
            'second_billing_city'   => $order->second_billing_city,
            'second_billing_phone'   => $order->second_billing_phone,
            'second_billing_country'   => $order->second_billing_country,
            'second_billing_postalcode'   => $order->second_billing_postalcode,

            'billing_discount'   => $order->billing_discount,
            'billing_discount_code'   => $order->billing_discount_code,

            'billing_subtotal'   => number_format($order->billing_subtotal / 100,2,'.',','),
            'billing_tax'   => number_format($order->billing_tax / 100,2,'.',','),
            'billing_total'   => number_format($order->billing_total / 100,2,'.',','),

            'delivery_gateway'   => $order->delivery_gateway,
            'payment_gateway'   => $order->payment_gateway,
            'name_on_card'   => $order->name_on_card,
            'status'   => $order->status,
            'instructions'   => $order->instructions,
            'created_at'  => $order->created_at->format('d M Y - H:i:s'),
        ];
    }

    /**
     * Include Product
     * @param  Order  $order
     * @return Collection
     */
    public function includeProducts(Order $order)
    {
        return $this->collection($order->products, new ProductTransformer);
    }
}
