<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use JordanMiguel\LaravelPopular\Traits\Visitable;

class BlogPost extends Model
{
    use Visitable;

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

    public function author(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\BlogCategory');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
