<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoyagerThemeOption extends Model
{
    protected $table = 'voyager_theme_options';
    protected $fillable = ['voyager_theme_id', 'key', 'value'];
}
