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
        /*
          |--------------------------------------------------------------------------
          | products
          |--------------------------------------------------------------------------
          */
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

         /*
          |--------------------------------------------------------------------------
          | coupons
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | category-jewels
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | category-jewel-product
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | brands
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | deliveries
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | payments
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | orders
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | custom_pages
          |--------------------------------------------------------------------------
          */
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

        /*
          |--------------------------------------------------------------------------
          | blog-categories
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'blog_categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blog_categories',
                'display_name_singular' => 'Blog Category',
                'display_name_plural'   => 'Blog Categories',
                'icon'                  => 'voyager-categories',
                'model_name'            => 'App\BlogCategory',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        /*
          |--------------------------------------------------------------------------
          | blog-posts
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'blog_posts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blog_posts',
                'display_name_singular' => 'Blog Post',
                'display_name_plural'   => 'Blog Posts',
                'icon'                  => 'fa fa-sticky-note',
                'model_name'            => 'App\BlogPost',
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
