<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

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
    }
}
