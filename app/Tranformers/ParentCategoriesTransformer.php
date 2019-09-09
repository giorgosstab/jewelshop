<?php

namespace App\Transformer;

use App\CategoryJewel;
use League\Fractal\TransformerAbstract;

class ParentCategoriesTransformer extends TransformerAbstract
{

    public function transform(CategoryJewel $category)
    {
        return [
            'id'      => (int) $category->id,
            'category_name'   => $category->name,
            'slug'    => $category->slug,
            'image' => productImage($category->image),
            'created_at' => $category->created_at->format('d M Y - H:i:s'),
        ];
    }
}
