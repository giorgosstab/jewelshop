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
            ['name' => 'ACS Courier', 'slug' => 'acs-courier', 'image' => 'deliveries/dummy/acs.png', 'description' => 'Μεταφορικά: 3.00€', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Genikh Taxydromikh', 'slug' => 'genikh-taxydromikh', 'image' => 'deliveries/dummy/geniki.png', 'description' => 'Μεταφορικά: 4.00€', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Transport Company', 'slug' => 'transport-company', 'image' => 'deliveries/dummy/metaforikh.png', 'description' => 'Ελάχιστα Μεταφορικά: 5.00€', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
