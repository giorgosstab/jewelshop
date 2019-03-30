<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionsTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::generateFor('products');
        Permission::generateFor('coupons');
        Permission::generateFor('category_jewels');
//        Permission::generateFor('category_jewel_product');
        Permission::generateFor('brands');
        Permission::generateFor('deliveries');
        Permission::generateFor('payments');
        Permission::generateFor('orders');
        Permission::generateFor('custom_pages');
        Permission::generateFor('blog_categories');
        Permission::generateFor('blog_posts');
        Permission::generateFor('tags');
//        Permission::generateFor('post_tag');
        Permission::generateFor('comments');
        Permission::generateFor('replies');
        Permission::generateFor('voyager_themes');

        $permission = Permission::firstOrNew([
            'key' => 'browse_themes',
            'table_name' => null,
        ]);
        if (!$permission->exists) {
            $permission->save();
            $role = Role::whereIn('name', ['super_admin','admin'])->first();
            if (!is_null($role)) {
                $role->permissions()->attach($permission);
            }
        }
    }
}
