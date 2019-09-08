<?php

namespace App\Transformer;

use App\Product;
use League\Fractal\TransformerAbstract;

class ProductsTransformer extends TransformerAbstract
{

    public function transform(Product $product)
    {
        $images = collect([]);
        if($product->images && $product->images!=="[]"){
            foreach(json_decode($product->images, true) as $img){
                $images->push(url('storage/'.$img));
            }
        }

        $discount = $product->price - $product->secondprice;
        $percent = $product->presentPriceDeals() != null ? ($discount / $product->price) * 100 : 0;

        return [
            'id'          => (int) $product->id,
            'name'        => $product->name,
            'slug'        => $product->slug,
            'sku'         => $product->sku,
            'price'       => $product->presentPrice(),
            'price_int'       => $product->price,
            'secondprice' => $product->presentPriceDeals(),
            'discount'    => number_format((float)$percent, 2, '.', ''),
            'quantity'    => $product->quantity,
            'hotdeals'    => $product->hotdeals,
            'brand'       => [
                'name' => $product->brand->name,
            ],
            'image'       => productImage($product->image),
            'images'      => $images,
            'rating'      => round($product->ratings->avg('rating')),
            'description' => $product->description,
            'created_at'  => $product->created_at->format('d M Y - H:i:s'),
        ];
    }
}
