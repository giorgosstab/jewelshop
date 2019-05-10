<?php

namespace App\Transformer;

use App\Product;
use League\Fractal\TransformerAbstract;

class ProductsTransformer extends TransformerAbstract
{

    public function transform(Product $product)
    {
        return [
            'id'      => (int) $product->id,
            'name'   => $product->name,
            'slug'    => $product->slug,
            'image' => productImage($product->image),
            'rating' => round($product->ratings->avg('rating')),
            'created_at' => $product->created_at->format('d M Y - H:i:s'),
        ];
    }
}
