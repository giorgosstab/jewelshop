<?php

namespace App\Transformer;

use App\Delivery;
use League\Fractal\TransformerAbstract;

class DeliveriesTransformer extends TransformerAbstract
{

    public function transform(Delivery $delivery)
    {
        return [
            'id'      => (int) $delivery->id,
            'name'   => $delivery->name,
            'slug'    => $delivery->slug,
            'image' => productImage($delivery->image),
            'description'    => $delivery->description,
            'created_at' => $delivery->created_at->format('d M Y - H:i:s'),
        ];
    }
}
