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
                'order'        => 2,
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
                'order'        => 3,
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
                        "rule" => 'required|regex:/^[a-zA-Z0-9 ]+$/u|min:3|max:15'
                    ]
                ],
                'order'        => 4,
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
                'order'        => 5,
            ])->save();
        }
        $dataRow = $this->dataRow($productDataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Description',
                'required'     => 1,
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
                'order'        => 6,
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
                'order'        => 7,
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
                'order'        => 8,
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
                'order'        => 9,
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
                'order'        => 10,
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
                'order'        => 11,
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
                'order'        => 12,
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
                'order'        => 13,
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
                'order'        => 14,
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
                        "rule" => 'required|regex:/^[a-zA-Z0-9 _-]+$/u|min:5|max:15'
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
                'details'      => [],
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
                        "origin"=> [ "name"],
                        "forceUpdate"=> [ false]
                    ],
                    "validation" => [
                        "rule" => [
                            "required|regex:/^[a-zA-Z0-9-]+$/u|unique:category_jewels,slug"
                        ]
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
                'order'        => 6,
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
                'order'        => 7,
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
                        "origin"=> [ "name"],
                        "forceUpdate"=> [ false]
                    ],
                    "validation" => [
                        "rule" => [
                            "required|regex:/^[a-zA-Z0-9-]+$/u"
                        ]
                    ]
                ],
                'order'        => 3,
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
                'order'        => 4,
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
                'order'        => 4,
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
                'order'        => 5,
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
