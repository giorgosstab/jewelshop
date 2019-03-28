<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => __('voyager::seeders.roles.admin'),
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'editor']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Editor',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'author']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Author',
            ])->save();
        }
    }
}
