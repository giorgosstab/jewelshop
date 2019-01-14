<?php

use App\Brand;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Brand::insert([
            ['name' => 'Tiffany & Co', 'slug' => 'tiffany-and-co', 'image' => 'brands/dummy/brand1.jpeg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Harry Winston', 'slug' => 'harry-winston', 'image' => 'brands/dummy/brand2.jpeg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cartier', 'slug' => 'cartier', 'image' => 'brands/dummy/brand3.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chopard', 'slug' => 'chopard', 'image' => 'brands/dummy/brand4.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Van Cleef & Arpels', 'slug' => 'van-cleef-and-arpels', 'image' => 'brands/dummy/brand5.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Graff', 'slug' => 'graff', 'image' => 'brands/dummy/brand6.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bvlgari', 'slug' => 'bvlgari', 'image' => 'brands/dummy/brand7.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Boucheron', 'slug' => 'boucheron', 'image' => 'brands/dummy/brand8.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
