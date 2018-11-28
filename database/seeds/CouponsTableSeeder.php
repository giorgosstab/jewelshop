<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code' => 'BLACK_FRIDAY',
            'type' => 'fixed',
            'value' => 150,
        ]);

        Coupon::create([
            'code' => 'CHRISTMAS',
            'type' => 'percent',
            'percent_of' => 50,
        ]);
    }
}
