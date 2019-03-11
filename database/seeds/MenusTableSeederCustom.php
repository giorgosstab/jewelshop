<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'main',
        ]);
        Menu::firstOrCreate([
            'name' => 'social_media',
        ]);
        Menu::firstOrCreate([
            'name' => 'quick_links',
        ]);
    }
}
