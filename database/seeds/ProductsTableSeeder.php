<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 16; $i++){
            Product::create([
                'name' => 'Product ' .$i,
                'slug' => 'product-' .$i,
                'sku' => rand(00000001, 99999999),
                'price' => rand(300, 1099),
                'description' => 'Lorem ipsum ' . $i . 'dolor sit amet, consectetur adipiscing elit. Cras ac nisi eu tortor sodales ornare vitae non dolor. Praesent elit velit, blandit vitae nibh eget, feugiat tincidunt diam. Nam tincidunt auctor tellus, nec dictum risus ullamcorper quis.'
            ]); //->categories()->attach(2)
        }
    }
}
