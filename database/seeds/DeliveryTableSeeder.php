<?php

use App\Delivery;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Delivery::insert([
            ['name' => 'Tiffany & Co', 'slug' => 'acs', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Harry Winston', 'slug' => 'harry-winston', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cartier', 'slug' => 'cartier', 'image' => 'brands/dummy/brand3.jpg', 'created_at' => $now, 'updated_at' => $now],
//            ['name' => 'Cartier', 'slug' => 'cartier', 'image' => 'brands/dummy/brand3.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
