<?php

use App\VoyagerTheme;
use App\VoyagerThemeOption;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VoyagerThemeOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $theme = VoyagerTheme::first();
        VoyagerThemeOption::insert([
            ['voyager_theme_id' => $theme->id,'key' => 'home_title','value' => 'Home','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_parallax','value' => 'themes/dummy/home.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_parallax_image1','value' => 'themes/dummy/parallax_left.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_parallax_image2','value' => 'themes/dummy/parallax_right.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'home_slider1','value' => 'themes/dummy/home-slider1.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_slider1_header_big','value' => 'Jewellery','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_slider1_header_small','value' => 'Welcome To Jewellery Store','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'home_slider2','value' => 'themes/dummy/home-slider2.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_slider2_header_big','value' => 'Latest jewellery','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_slider2_header_small','value' => 'Latest jewellery','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'home_slider3','value' => 'themes/dummy/home-slider3.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_slider3_header_big','value' => 'Jewelleries','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'home_slider3_header_small','value' => 'Our Specials','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'shop_title','value' => 'Shop','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'shop_parallax','value' => 'themes/dummy/shop.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'shop_details_parallax','value' => 'themes/dummy/shop-details.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'cart_title','value' => 'Shopping Cart','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'cart_parallax','value' => 'themes/dummy/bg1.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'checkout_title','value' => 'Checkout','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'checkout_parallax','value' => 'themes/dummy/bg1.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'blog_title','value' => 'Blog','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'blog_parallax','value' => 'themes/dummy/blog.jpg','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'blog_details_parallax','value' => 'themes/dummy/blog-top.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'contact_title','value' => 'Contact Us','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'contact_parallax','value' => 'themes/dummy/contact.jpeg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'register_title','value' => 'Sign Up','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'register_parallax','value' => 'themes/dummy/register.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'login_title','value' => 'Sign In','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'login_parallax','value' => 'themes/dummy/login.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'resend_title','value' => 'Re send Activation Code','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'resend_parallax','value' => 'themes/dummy/resend.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'reset_title','value' => 'Reset Password','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'reset_parallax','value' => 'themes/dummy/reset.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'search_title','value' => 'Search Result','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'search_parallax','value' => 'themes/dummy/shop.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'profile_title','value' => 'Profile Details','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'profile_parallax','value' => 'themes/dummy/profile.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'order_title','value' => 'Order','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'order_parallax','value' => 'themes/dummy/order.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'review_title','value' => 'Edit Review','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'review_parallax','value' => 'themes/dummy/review.jpg','created_at' => $now, 'updated_at' => $now],

            ['voyager_theme_id' => $theme->id,'key' => 'top_navbar_color','value' => '#f5f5f5','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'middle_navbar_color','value' => '#fefefe','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'bottom_navbar_color','value' => '#000000','created_at' => $now, 'updated_at' => $now],
            ['voyager_theme_id' => $theme->id,'key' => 'main_color','value' => '#dfb859','created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
