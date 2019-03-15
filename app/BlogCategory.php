<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
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

    public function parentId(){
        return $this->belongsTo('App\BlogCategory');
    }
}
