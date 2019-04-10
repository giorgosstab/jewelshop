<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerPermissionDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__.'/VoyagerPermissionRoleSeeder/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed('PermissionRoleTableSeeder');
        $this->seed('PermissionRoleTableSeederCustom');
    }
}
