<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural'   => 'Products',
                'icon'                  => 'voyager-bag',
                'model_name'            => 'App\Product',
                'policy_name'           => null,
                'controller'            => '\App\Http\Controllers\Voyager\ProductsController',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        $dataType = $this->dataType('slug', 'coupons');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'coupons',
                'display_name_singular' => 'Coupon',
                'display_name_plural'   => 'Coupons',
                'icon'                  => 'voyager-dollar',
                'model_name'            => 'App\Coupon',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        $dataType = $this->dataType('slug', 'category-jewels');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'category_jewels',
                'display_name_singular' => 'Category Jewel',
                'display_name_plural'   => 'Category Jewels',
                'icon'                  => 'voyager-categories',
                'model_name'            => 'App\CategoryJewel',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
//        $dataType = $this->dataType('slug', 'category-jewel-product');
//        if (!$dataType->exists) {
//            $dataType->fill([
//                'name'                  => 'category jewel products',
//                'display_name_singular' => 'Category Jewel Product',
//                'display_name_plural'   => 'Category Jewel Products',
//                'icon'                  => 'voyager-tag',
//                'model_name'            => 'App\CategoryJewelProduct',
//                'controller'            => '',
//                'generate_permissions'  => 1,
//                'description'           => '',
//                'server_side'           => 1,
//            ])->save();
//        }
        $dataType = $this->dataType('slug', 'brands');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'brands',
                'display_name_singular' => 'Brand',
                'display_name_plural'   => 'Brands',
                'icon'                  => 'voyager-archive',
                'model_name'            => 'App\Brand',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        $dataType = $this->dataType('slug', 'deliveries');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'deliveries',
                'display_name_singular' => 'Delivery',
                'display_name_plural'   => 'Deliveries',
                'icon'                  => 'voyager-truck',
                'model_name'            => 'App\Delivery',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        $dataType = $this->dataType('slug', 'payments');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'payments',
                'display_name_singular' => 'Payment',
                'display_name_plural'   => 'Payments',
                'icon'                  => 'voyager-wallet',
                'model_name'            => 'App\Payment',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        $dataType = $this->dataType('slug', 'orders');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'orders',
                'display_name_singular' => 'Order',
                'display_name_plural'   => 'Orders',
                'icon'                  => 'fa fa-shopping-bag',
                'model_name'            => 'App\Order',
                'controller'            => 'App\Http\Controllers\Voyager\OrdersController',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        $dataType = $this->dataType('slug', 'custom_pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'custom_pages',
                'display_name_singular' => 'Custom Page',
                'display_name_plural'   => 'Custom Pages',
                'icon'                  => 'fa fa-plus-circle',
                'model_name'            => 'App\CustomPage',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
