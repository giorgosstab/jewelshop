<?php

namespace App\Transformer;

use App\BlogPost;
use League\Fractal\TransformerAbstract;

class PopularBlogPostsTransformer extends TransformerAbstract
{

    public function transform(BlogPost $post)
    {
        return [
            'id'      => (int) $post->id,
            'title'   => $post->title,
            'slug'    => $post->slug,
            'excerpt' => $post->excerpt,
            'image' => productImage($post->image),
            'created_at' => $post->created_at->format('d M Y - H:i:s'),
        ];
    }
}
