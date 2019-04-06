<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $productDataType = DataType::where('slug', 'products')->firstOrFail();
        /*
        |--------------------------------------------------------------------------
        | Products
        |--------------------------------------------------------------------------
        */
        $dataRow = $this->dataRow($productDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => null,
                'order'        => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'brand_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Brand Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => "",
                    "null" => "",
                    "options" => [
                        "" => "-- None --"
                    ],
                    "relationship" => [
                        "key" => "id",
                        "label" => "name"
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9 ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:products,slug"
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'sku');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Sku',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9 ]+$/u|min:3|max:15|unique:products,sku'
                    ]
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'price');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Price',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^\\d*(\\.\\d{1,2})?$/'
                    ]
                ],
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'secondprice');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Secondprice',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'regex:/^\\d*(\\.\\d{1,2})?$/'
                    ]
                ],
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'quantity');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Quantity',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Description',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'PUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 10,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'bestof');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Bestof',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "on" => 'Yes',
                    "off" => 'No',
                    "checked" => 'false'
                ],
                'order'        =>11,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'offer');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Offer',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "on" => 'Yes',
                    "off" => 'No',
                    "checked" => 'false'
                ],
                'order'        => 12,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'hotdeals');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Hotdeals',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "on" => 'Yes',
                    "off" => 'No',
                    "checked" => 'false'
                ],
                'order'        => 13,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "resize" => [
                        "width" => '1000',
                        "height" => '1000'
                    ],
                    "quality" => '100%',
                    "upsize" => true,
                    "thumbnails" => [
                        [
                            "name" => 'medium',
                            "crop" => [
                                "width" => '600',
                                "height" => '600'
                            ]
                        ],
                        [
                            "name" => 'small',
                            "crop" => [
                                "width" => '300',
                                "height" => '300'
                            ]
                        ],
                    ],
                ],
                'order'        => 14,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'images');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'multiple_images',
                'display_name' => 'Images',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "resize" => [
                        "width" => "1000",
                        "height" => "1000"
                    ],
                    "quality" => "100%",
                    "upsize" => true
                ],
                'order'        => 15,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 16,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 17,
            ])->save();
        }
        /*
        |--------------------------------------------------------------------------
        | Coupons
        |--------------------------------------------------------------------------
        */
        $couponDataType = DataType::where('slug', 'coupons')->firstOrFail();
        $dataRow = $this->dataRow($couponDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => null,
                'order'        => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($couponDataType, 'code');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Code',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9 _-]+$/u|min:5|max:15|unique:coupons,code'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($couponDataType, 'type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Type',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required"
                    ],
                    "default" => "fixed",
                    "options" => [
                        "fixed" => "Fixed Value",
                        "percent" => "Percent Off"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($couponDataType, 'value');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Value',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "null" => ""
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($couponDataType, 'percent_of');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Percent Of',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "null" => ""
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($couponDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($couponDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
        /*
         |--------------------------------------------------------------------------
         | Categories
         |--------------------------------------------------------------------------
         */
        $categoryDataType = DataType::where('slug', 'category-jewels')->firstOrFail();
        $dataRow = $this->dataRow($categoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'hidden',
                'display_name' => 'Id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => null,
                'order'        => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Parent Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => "",
                    "null" => "",
                    "options" => [
                        "" => "-- None --"
                    ],
                    "relationship" => [
                        "key" => "id",
                        "label" => "name"
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9& ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9-]+$/u|unique:category_jewels,slug'
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'PUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($categoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }
        /*
         |--------------------------------------------------------------------------
         | Category Product
         |--------------------------------------------------------------------------
         */
//        $categoryProductDataType = DataType::where('slug', 'category-jewel-product')->firstOrFail();
//        $dataRow = $this->dataRow($categoryProductDataType, 'id');
//        if (!$dataRow->exists) {
//            $dataRow->fill([
//                'type'         => 'hidden',
//                'display_name' => 'Id',
//                'required'     => 1,
//                'browse'       => 0,
//                'read'         => 0,
//                'edit'         => 0,
//                'add'          => 0,
//                'delete'       => 0,
//                'details'      => '',
//                'order'        => 1,
//            ])->save();
//        }
//        $dataRow = $this->dataRow($categoryProductDataType, 'product_id');
//        if (!$dataRow->exists) {
//            $dataRow->fill([
//                'type'         => 'number',
//                'display_name' => 'Product Id',
//                'required'     => 0,
//                'browse'       => 1,
//                'read'         => 1,
//                'edit'         => 1,
//                'add'          => 1,
//                'delete'       => 1,
//                'details'      => '',
//                'order'        => 2,
//            ])->save();
//        }
//        $dataRow = $this->dataRow($categoryProductDataType, 'category_jewel_id');
//        if (!$dataRow->exists) {
//            $dataRow->fill([
//                'type'         => 'number',
//                'display_name' => 'Category Jewel Id',
//                'required'     => 0,
//                'browse'       => 1,
//                'read'         => 1,
//                'edit'         => 1,
//                'add'          => 1,
//                'delete'       => 1,
//                'details'      => '',
//                'order'        => 3,
//            ])->save();
//        }
//        $dataRow = $this->dataRow($categoryProductDataType, 'created_at');
//        if (!$dataRow->exists) {
//            $dataRow->fill([
//                'type'         => 'timestamp',
//                'display_name' => 'Created At',
//                'required'     => 0,
//                'browse'       => 0,
//                'read'         => 0,
//                'edit'         => 0,
//                'add'          => 0,
//                'delete'       => 0,
//                'details'      => '',
//                'order'        => 4,
//            ])->save();
//        }
//        $dataRow = $this->dataRow($categoryProductDataType, 'updated_at');
//        if (!$dataRow->exists) {
//            $dataRow->fill([
//                'type'         => 'timestamp',
//                'display_name' => 'Updated At',
//                'required'     => 0,
//                'browse'       => 0,
//                'read'         => 0,
//                'edit'         => 0,
//                'add'          => 0,
//                'delete'       => 0,
//                'details'      => '',
//                'order'        => 5,
//            ])->save();
//        }
        /*
        |--------------------------------------------------------------------------
        | Brands
        |--------------------------------------------------------------------------
        */
        $brandsDataType = DataType::where('slug', 'brands')->firstOrFail();
        $dataRow = $this->dataRow($brandsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($brandsDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9& ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($brandsDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:brands,slug"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($brandsDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'PUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($brandsDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "resize" => [
                        "width" => "807",
                        "height" => "237"
                    ],
                    "quality" => "100%",
                    "upsize" => true
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($brandsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($brandsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Deliveries
        |--------------------------------------------------------------------------
        */
        $deliveryDataType = DataType::where('slug', 'deliveries')->firstOrFail();
        $dataRow = $this->dataRow($deliveryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9& ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:deliveries,slug"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'PUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "resize" => [
                        "width" => "400"
                    ],
                    "quality" => "100%",
                    "upsize" => true
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Description',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($deliveryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Payments
        |--------------------------------------------------------------------------
        */
        $paymentDataType = DataType::where('slug', 'payments')->firstOrFail();
        $dataRow = $this->dataRow($paymentDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9& ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:payments,slug"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'PUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "resize" => [
                        "width" => "526"
                    ],
                    "quality" => "100%",
                    "upsize" => true
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'extra_code');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Extra Code',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'extra_css_top');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Extra Css Top',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'extra_js_bottom');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Extra Js Bottom',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 10,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Orders
        |--------------------------------------------------------------------------
        */
        $paymentDataType = DataType::where('slug', 'orders')->firstOrFail();
        $dataRow = $this->dataRow($paymentDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'unique_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Unique Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => null,
                'order' => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'User Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_fname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Fname',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_lname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Lname',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_address');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Address',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_housenumber');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Billing Housenumber',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_locality');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Locality',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_city');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing City',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 10,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Phone',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 11,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_country');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Country',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 12,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_postalcode');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Billing Postalcode',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 13,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'different_shipping_address');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'checkbox',
                'display_name' => 'Different Shipping Address',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details'      => [
                    "on" => "Yse",
                    "off" => "No",
                    "checked" => "false"
                ],
                'order' => 14,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_fname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Fname',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 15,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_lname');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Lname',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 16,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_address');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Address',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 17,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_housenumber');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Second Billing Housenumber',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 18,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_locality');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Locality',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 19,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Email',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 20,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_city');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing City',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 21,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Phone',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 22,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_country');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Country',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 23,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'second_billing_postalcode');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Second Billing Postalcode',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 24,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_discount');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Billing Discount',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 25,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_discount_code');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Billing Discount Code',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 26,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_subtotal');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Billing Subtotal',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 27,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_tax');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Billing Tax',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 28,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'billing_total');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'number',
                'display_name' => 'Billing Total',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 29,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'delivery_gateway');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Delivery Gateway',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 30,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'payment_gateway');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Payment Gateway',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 31,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'name_on_card');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Name On Card',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 32,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'select_dropdown',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details'      => [
                    "default" => 'PENDING',
                    "options" => [
                        'PENDING' => 'PENDING',
                        'CONFIRMED' => 'CONFIRMED',
                        'PAIDED' => 'PAIDED',
                        'SENTED' => 'SENTED',
                        'CANCELLED' => 'CANCELLED'
                    ]
                ],
                'order' => 33,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'error');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'text',
                'display_name' => 'Error',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 34,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 35,
            ])->save();
        }
        $dataRow = $this->dataRow($paymentDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 36,
            ])->save();
        }
        /*
        |--------------------------------------------------------------------------
        | Custom Pages
        |--------------------------------------------------------------------------
        */
        $customPagesDataType = DataType::where('slug', 'custom_pages')->firstOrFail();
        $dataRow = $this->dataRow($customPagesDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'User Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Title',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9-_& ]+$/u|min:3|max:20'
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "title",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:custom_pages,slug"
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Body',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'extra_css_top');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Extra Css Top',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'extra_js_bottom');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'code_editor',
                'display_name' => 'Extra Js Bottom',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'INACTIVE',
                    "options" => [
                        'INACTIVE' => 'INACTIVE',
                        'ACTIVE' => 'ACTIVE',
                    ]
                ],
                'order'        => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'layout');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Layout',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'CONTAINER_DEFAULT',
                    "options" => [
                        'CONTAINER_FLUID' => 'CONTAINER_FLUID',
                        'CONTAINER_DEFAULT' => 'CONTAINER_DEFAULT',
                    ]
                ],
                'order'        => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'breadcrumbs');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Breadcrumbs',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "on" => 'Yes',
                    "off" => 'No',
                    "checked" => 'True'
                ],
                'order'        => 10,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'column_right_left');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Column Right Left',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'COLUMN_DEFAULT',
                    "options" => [
                        'COLUMN_DEFAULT' => 'COLUMN_DEFAULT',
                        'COLUMN_RIGHT' => 'COLUMN_RIGHT',
                        'COLUMN_LEFT' => 'COLUMN_LEFT',
                    ]
                ],
                'order'        => 11,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'image_parallax');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 12,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 13,
            ])->save();
        }
        $dataRow = $this->dataRow($customPagesDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 14,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Blog Categories
        |--------------------------------------------------------------------------
        */
        $blogCategoriesDataType = DataType::where('slug', 'blog_categories')->firstOrFail();
        $dataRow = $this->dataRow($blogCategoriesDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($blogCategoriesDataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Parent Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => "",
                    "null" => "",
                    "options" => [
                        "" => "-- None --"
                    ],
                    "relationship" => [
                        "key" => "id",
                        "label" => "name"
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($blogCategoriesDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9& ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($blogCategoriesDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:blog_categories,slug"
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($blogCategoriesDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'UNPUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($blogCategoriesDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($blogCategoriesDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Blog Posts
        |--------------------------------------------------------------------------
        */
        $blogPostsDataType = DataType::where('slug', 'blog_posts')->firstOrFail();
        $dataRow = $this->dataRow($blogPostsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Author Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => "null",
                    "options" => [
                        "" => "-- None --"
                    ],
                    "relationship" => [
                        "key" => "id",
                        "label" => "name"
                    ],
                    "validation" => [
                        "rule" => "required"
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Category Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => "null",
                    "options" => [
                        "" => "-- None --"
                    ],
                    "relationship" => [
                        "key" => "id",
                        "label" => "name"
                    ],
                    "validation" => [
                        "rule" => "required"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Title',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|min:5|max:150'
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "title",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:blog_posts,slug"
                    ]
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Excerpt',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|min:30|max:700'
                    ]
                ],
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Body',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required'
                    ]
                ],
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'UNPUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 10,
            ])->save();
        }
        $dataRow = $this->dataRow($blogPostsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 11,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Tags
        |--------------------------------------------------------------------------
        */
        $tagsDataType = DataType::where('slug', 'tags')->firstOrFail();
        $dataRow = $this->dataRow($tagsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($tagsDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9#]+$/u|min:3|max:20|unique:tags,name'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($tagsDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:tags,slug"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($tagsDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => 'UNPUBLISHED',
                    "options" => [
                        'UNPUBLISHED' => 'UNPUBLISHED',
                        'PUBLISHED' => 'PUBLISHED',
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($tagsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($tagsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Comments
        |--------------------------------------------------------------------------
        */
        $commentsDataType = DataType::where('slug', 'comments')->firstOrFail();
        $dataRow = $this->dataRow($commentsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'User Id',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'sometimes|nullable'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'comment_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'users',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\User',
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'user_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'blog_categories',
                    'pivot' => 0,
                    'taggable' => 0,
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'blog_post_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Blog Post Id',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required'
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'comment_belongsto_blog_post_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'blog_posts',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\BlogPost',
                    'table' => 'blog_posts',
                    'type' => 'belongsTo',
                    'column' => 'blog_post_id',
                    'key' => 'id',
                    'label' => 'slug',
                    'pivot_table' => 'blog_categories',
                    'pivot' => 0,
                    'taggable' => 0,
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required_with:email"
                    ]
                ],
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Email',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required_with:name"
                    ]
                ],
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'comment');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Comment',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required|min:5|max:2000"
                    ]
                ],
                'order'        => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($commentsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 10,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Replies
        |--------------------------------------------------------------------------
        */
        $repliesDataType = DataType::where('slug', 'replies')->firstOrFail();
        $dataRow = $this->dataRow($repliesDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'comment_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Comment Id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "default" => "null",
                    "options" => [
                      "" => "-- None --"
                    ],
                    "relationship" => [
                        "key" => "id",
                        "label" => "comment"
                    ],
                    "validation" => [
                        "rule" => 'required'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'reply_belongsto_comment_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'comments',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\Comment',
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'comment_id',
                    'key' => 'id',
                    'label' => 'id',
                    'pivot_table' => 'blog_categories',
                    'pivot' => 0,
                    'taggable' => 1,
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'User Id',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'sometimes|nullable'
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'reply_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'users',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\User',
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'user_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'blog_categories',
                    'pivot' => 0,
                    'taggable' => 0,
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required_with:email"
                    ]
                ],
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Email',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required_with:name"
                    ]
                ],
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'comment');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Comment',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required|min:5|max:2000"
                    ]
                ],
                'order'        => 8,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 9,
            ])->save();
        }
        $dataRow = $this->dataRow($repliesDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 10,
            ])->save();
        }

        /*
        |--------------------------------------------------------------------------
        | Ratings
        |--------------------------------------------------------------------------
        */
        $ratingsDataType = DataType::where('slug', 'ratings')->firstOrFail();
        $dataRow = $this->dataRow($ratingsDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'User Id',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'rating_belongsto_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'users',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\User',
                    'table' => 'users',
                    'type' => 'belongsTo',
                    'column' => 'user_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'blog_categories',
                    'pivot' => 0,
                    'taggable' => 0,
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'product_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'Product Id',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required'
                    ]
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'rating_belongsto_product_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => 'products',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'model' => 'App\Product',
                    'table' => 'products',
                    'type' => 'belongsTo',
                    'column' => 'product_id',
                    'key' => 'id',
                    'label' => 'name',
                    'pivot_table' => 'blog_categories',
                    'pivot' => 0,
                    'taggable' => 0,
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'rating');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Rating',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => "required"
                    ]
                ],
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
        $dataRow = $this->dataRow($ratingsDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 8,
            ])->save();
        }

        /*
       |--------------------------------------------------------------------------
       | Voyager Themes
       |--------------------------------------------------------------------------
       */
        $themesDataType = DataType::where('slug', 'voyager_themes')->firstOrFail();
        $dataRow = $this->dataRow($themesDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type' => 'hidden',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => null,
                'order' => 1,
            ])->save();
        }
        $dataRow = $this->dataRow($themesDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|regex:/^[a-zA-Z0-9& ]+$/u|min:3|max:30'
                    ]
                ],
                'order'        => 2,
            ])->save();
        }
        $dataRow = $this->dataRow($themesDataType, 'folder');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Folder',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "slugify" => [
                        "origin" => "name",
                        "forceUpdate" => false
                    ],
                    "validation" => [
                        "rule" => "required|regex:/^[a-zA-Z0-9-]+$/u|unique:voyager_themes,folder"
                    ]
                ],
                'order'        => 3,
            ])->save();
        }
        $dataRow = $this->dataRow($themesDataType, 'active');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Active',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "on" => 'True',
                    "off" => 'False',
                    "checked" => 'false'
                ],
                'order'        => 4,
            ])->save();
        }
        $dataRow = $this->dataRow($themesDataType, 'version');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Version',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    "validation" => [
                        "rule" => 'required|min:3|max:20'
                    ]
                ],
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($themesDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Created At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 6,
            ])->save();
        }
        $dataRow = $this->dataRow($themesDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'Updated At',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => null,
                'order'        => 7,
            ])->save();
        }
    }
    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
