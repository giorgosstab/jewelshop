<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPostTag extends Model
{
    protected $table = 'blog_post_tag';

    protected $fillable = [
        'blog_post_id',
        'tag_id'
    ];
}
