<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->firstOrFail();
        $permissions = Permission::all();
        $permissionsFiltered = $permissions->filter(function ($permission, $key) {
            return !in_array($permission->key, [
                'browse_bread',
                'browse_database',

                'delete_settings',

                'delete_themes',
                'activate_themes',
                'deactivate_themes',

                'browse_voyager_themes',
                'read_voyager_themes',
                'edit_voyager_themes',
                'add_voyager_themes',
                'delete_voyager_themes',

                'delete_roles',
                'edit_roles',

            ]);
        });
        $role->permissions()->sync(
            $permissionsFiltered->pluck('id')->all()
        );

        $role = Role::where('name', 'editor')->firstOrFail();
        $permissions = Permission::all();
        $permissionsFiltered = $permissions->filter(function ($permission, $key) {
            return in_array($permission->key, [
                'browse_admin',
                'browse_media',

                'browse_menus',
                'read_menus',
                'edit_menus',
                'add_menus',
                'delete_menus',

                'browse_custom_pages',
                'read_custom_pages',
                'edit_custom_pages',
                'add_custom_pages',
                'delete_custom_pages',

                'browse_blog_categories',
                'read_blog_categories',
                'edit_blog_categories',
                'add_blog_categories',
                'delete_blog_categories',

                'browse_blog_posts',
                'read_blog_posts',
                'edit_blog_posts',
                'add_blog_posts',
                'delete_blog_posts',

                'browse_tags',
                'read_tags',
                'edit_tags',
                'add_tags',
                'delete_tags',
            ]);
        });
        $role->permissions()->sync(
            $permissionsFiltered->pluck('id')->all()
        );

        $role = Role::where('name', 'author')->firstOrFail();
        $permissions = Permission::all();
        $permissionsFiltered = $permissions->filter(function ($permission, $key) {
            return in_array($permission->key, [
                'browse_admin',
                'browse_media',

                'browse_blog_posts',
                'read_blog_posts',
                'edit_blog_posts',
                'add_blog_posts',
            ]);
        });
        $role->permissions()->sync(
            $permissionsFiltered->pluck('id')->all()
        );
    }
}
