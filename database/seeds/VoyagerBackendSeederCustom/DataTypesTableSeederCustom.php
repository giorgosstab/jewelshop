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
                'controller'            => '\App\Http\Controllers\Voyager\OrdersController',
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
                'controller'            => '\App\Http\Controllers\Voyager\BlogPostController',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        /*
          |--------------------------------------------------------------------------
          | blog-tags
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'tags');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tags',
                'display_name_singular' => 'Tag',
                'display_name_plural'   => 'Tags',
                'icon'                  => 'fa fa-tags',
                'model_name'            => 'App\Tag',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        /*
          |--------------------------------------------------------------------------
          | comments
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'comments');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'comments',
                'display_name_singular' => 'Comment',
                'display_name_plural'   => 'Comments',
                'icon'                  => 'fa fa-comments',
                'model_name'            => 'App\Comment',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        /*
          |--------------------------------------------------------------------------
          | replies
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'replies');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'replies',
                'display_name_singular' => 'Reply',
                'display_name_plural'   => 'Replies',
                'icon'                  => 'fa fa-mail-reply-all',
                'model_name'            => 'App\Reply',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        /*
          |--------------------------------------------------------------------------
          | Ratings
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'ratings');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'ratings',
                'display_name_singular' => 'Rating',
                'display_name_plural'   => 'Ratings',
                'icon'                  => 'voyager-star-two',
                'model_name'            => 'App\Rating',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }
        /*
          |--------------------------------------------------------------------------
          | wishlists
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'wishlists');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'wishlists',
                'display_name_singular' => 'Wishlist',
                'display_name_plural'   => 'Wishlists',
                'icon'                  => 'voyager-heart',
                'model_name'            => 'App\Wishlist',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'server_side'           => 1,
            ])->save();
        }

        /*
          |--------------------------------------------------------------------------
          | Voyager Themes
          |--------------------------------------------------------------------------
          */
        $dataType = $this->dataType('slug', 'voyager_themes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'voyager_themes',
                'display_name_singular' => 'Voyager Theme',
                'display_name_plural'   => 'Voyager Themes',
                'icon'                  => 'voyager-paint-bucket',
                'model_name'            => 'App\VoyagerTheme',
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
