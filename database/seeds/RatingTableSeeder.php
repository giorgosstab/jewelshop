<?php

use App\Product;
use App\Rating;
use App\User;
use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        for($i = 1; $i <= $products->count(); $i++){
            for($j = 0; $j < 5; $j++) {
                Rating::create([
                    'user_id' => User::all()->random()->id,
                    'product_id' => $i,
                    'rating' => rand(1,5),
                ]);
            }
        }
    }
}
