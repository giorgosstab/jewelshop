<?php
/**
 * Created by PhpStorm.
 * User: Anonymous
 * Date: 11/6/2018
 * Time: 6:03 AM
 */
function presentPrice($price) {
    return number_format($price, 2);
}

function productImage($path)
{
    return file_exists('storage/'.$path) ? secure_asset('storage/'.$path) : secure_asset('storage/products/no_image.jpg');
}
