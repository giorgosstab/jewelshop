<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/**
 * Created by PhpStorm.
 * User: Anonymous
 * Date: 11/6/2018
 * Time: 6:03 AM
 */
function presentPrice($price) {
    return number_format($price / 100,2,'.',',');

}

function productImage($path) {
    return $path && file_exists('storage/' . $path) ? secure_asset('storage/'.$path) : secure_asset('storage/products/dummy/no_image.jpg');
}

function categoryImage($path) {
    return $path && file_exists('storage/' . $path) ? secure_asset('storage/'.$path) : secure_asset('storage/category-jewels/dummy/no_image.jpg');
}

function brandImage($path) {
    return $path && file_exists('storage/' . $path) ? secure_asset('storage/'.$path) : secure_asset('storage/brands/dummy/no_image.jpg');
}

function settingsAdminImageExist($path, $page) {
    if($page === "homepage"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg-img.jpg');
    }
    if($page === "aboutUs"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg1.jpg');
    }
    if($page === "shop"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg1.jpg');
    }
    if($page === "blog"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/blog-top.jpg');
    }
    if($page === "contact"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg3.jpg');
    }
    if($page === "register"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg3.jpg');
    }
    if($page === "login"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg1.jpg');
    }
    if($page === "reset_password"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/blog-top.jpg');
    }
    if($page === "resend_activation"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/blog-top.jpg');
    }
    if($page === "logo"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/logo.png');
    }
    if($page === "logo-footer"){
        return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/logo-right.png');
    }
}

function customPageImageParallaxExist($path) {
    return $path && file_exists('storage/' . $path) ? Voyager::image($path) : secure_asset('assets/images/bg-img.jpg');
}

function jsonDecode($json_string) {
    $data = json_decode($json_string);
    return $data[0]->download_link;
}

function getNumbers() {
    $tax = config('cart.tax') / 100;
    $discount = session()->get('coupon')['discount'] ?? 0;
    $code = session()->get('coupon')['name'] ?? null;
    $newSubTotal = (Cart::subtotal() - $discount);
    if($newSubTotal < 0){
        $newSubTotal = 0;
    }
    $newTax = $newSubTotal * $tax;
    $newTotal = $newSubTotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'discount' => $discount,
        'code' => $code,
        'newSubTotal' => $newSubTotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}

function appendUrlParams(array $parameter) {
    return array_merge(\Request::query(), $parameter);
}
function removeUrlParams(array $parameter, $remove) {
    $finalArray = array_merge(\Request::query(), $parameter);
    unset($finalArray[$remove]);
    return $finalArray;
}


function numberOrdinalSuffix($number) {
    $numberFormatter = new \NumberFormatter('en_US', \NumberFormatter::ORDINAL);
    return $numberFormatter->format($number);
}

function isActiveTab($route, $title, $output="active")
{
    if ($route === null || $route === "") {
        $title = Str::lower($title);
        return \Request::is(str_replace('/','',$title)) ? 'active' : "";
    } else {
        if (Route::currentRouteName() == $route) {
            return $output;
        }
    }
}

function getStockLevel($quantity) {
    if($quantity > setting('site.stock_threshold')){
        $thesholdX3 = setting('site.stock_threshold') * 3;
        if($quantity <= $thesholdX3  && $quantity > setting('site.stock_threshold')) {
            $stockLevel = '<div class="tag-list text-right">
                            <ul>
                                <li><a style="background-color: #28a745;" href="#" data-toggle="tooltip" data-placement="bottom" title="'.$quantity.' item(s) left!"><i class="fa fa-tag"></i> In Stock </a></li>
                            </ul>
                        </div>';
        } else {
            $stockLevel = '<div class="tag-list text-right">
                            <ul>
                                <li><a style="background-color: #28a745;" href="#"><i class="fa fa-tag"></i> In Stock </a></li>
                            </ul>
                        </div>';
        }
    } elseif ($quantity <= setting('site.stock_threshold') && $quantity > 0) {
        $stockLevel = '<div class="tag-list text-right">
                            <ul>
                                <li><a style="background-color: #ffc107;" href="#" data-toggle="tooltip" data-placement="bottom" title="'.$quantity.' item(s) left!"><i class="fa fa-tag"></i> Low Stock </a></li>
                            </ul>
                        </div>';
    } else {
        $stockLevel = '<div class="tag-list text-right">
                            <ul>
                                <li><a style="background-color: #dc3545;" href="#" data-toggle="tooltip" data-placement="bottom" title="For more Info please contact with us!"><i class="fa fa-tag"></i> Not Available </a></li>
                            </ul>
                        </div>';
    }

    return $stockLevel;
}
