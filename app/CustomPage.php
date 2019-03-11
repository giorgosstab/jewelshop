<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPage extends Model
{
    /**
     * Statuses.
     */
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';

    /**
     * Layouts.
     */
    const LAYOUT_CONTAINER_DEFAULT = 'CONTAINER_DEFAULT';
    const LAYOUT_CONTAINER_FLUID = 'CONTAINER_FLUID';

    /**
     * Columns.
     */
    const COLUMN_DEFAULT = 'COLUMN_DEFAULT';
    const COLUMN_RIGHT = 'COLUMN_RIGHT';
    const COLUMN_LEFT = 'COLUMN_LEFT';



    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    /**
     * List of layouts.
     *
     * @var array
     */
    public static $layouts = [self::LAYOUT_CONTAINER_DEFAULT, self::LAYOUT_CONTAINER_FLUID];

    /**
     * List of columns.
     *
     * @var array
     */
    public static $columns = [self::COLUMN_DEFAULT, self::COLUMN_RIGHT, self::COLUMN_LEFT];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
