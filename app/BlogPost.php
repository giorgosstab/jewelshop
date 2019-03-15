<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    /**
     * Statuses.
     */
    const STATUS_PUBLISHED = 'PUBLISHED';
    const STATUS_UNPUBLISHED = 'UNPUBLISHED';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_PUBLISHED, self::STATUS_UNPUBLISHED];

    public function authorId(){
        return $this->belongsTo('App\User');
    }

    public function categoryId(){
        return $this->belongsTo('App\BlogCategory');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
