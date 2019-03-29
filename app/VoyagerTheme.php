<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoyagerTheme extends Model
{
    protected $table = 'voyager_themes';
    protected $fillable = ['name', 'folder', 'version'];

    public function options(){
        return $this->hasMany('App\VoyagerThemeOption', 'voyager_theme_id');
    }
}
