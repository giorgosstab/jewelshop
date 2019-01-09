<?php
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
    return $path && file_exists('storage/' . $path) ? secure_asset('storage/'.$path) : secure_asset('storage/products/no_image.jpg');
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
}

function jsonDecode($json_string) {
    $data = json_decode($json_string);
    return $data[0]->download_link;
}
