<?php

namespace App\Transformer;

use App\Product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{

    public function transform(Product $product)
    {
        return [
            'id'          => (int) $product->id,
            'name'        => $product->name,
            'slug'        => $product->slug,
            'sku'         => $product->sku,
            'brand'       => [
                'name' => $product->brand->name,
            ],
            'image'       => productImage($product->image),
            'images'      => productImage($product->images),
            'rating'      => round($product->ratings->avg('rating')),
            'description' => $product->description,
            'created_at'  => $product->created_at->format('d M Y - H:i:s'),
        ];
    }
}
