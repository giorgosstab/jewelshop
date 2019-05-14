<?php

namespace App\Transformer;

use App\Product;
use App\Wishlist;
use League\Fractal\TransformerAbstract;

class UserWishlistTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'products'
    ];

    public function transform(Wishlist $wishlist)
    {
        return [
            'id'    => (int) $wishlist->id,
            'name'    => $wishlist->user->name,
            'email'   => $wishlist->user->email,
        ];
    }

    /**
     * Include Product
     * @param  Wishlist  $wishlist
     * @return \League\Fractal\Resource\Item
     */
    public function includeProducts(Wishlist $wishlist)
    {
        return $this->item($wishlist->product, new ProductTransformer);
    }
}
