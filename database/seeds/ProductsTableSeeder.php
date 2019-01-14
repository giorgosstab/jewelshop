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
                'name'          => 'Wedding Ring Product ' .$i,
                'slug'          => 'wedding-ring-' .$i,
                'sku'           => rand(00000001, 99999999).$i,
                'price'         => rand($this->price(500), $this->price(5000)),
                'description'   => 'Lorem ipsum ' . $i . 'dolor sit amet, consectetur adipiscing elit. Cras ac nisi eu tortor sodales ornare vitae non dolor. Praesent elit velit, blandit vitae nibh eget, feugiat tincidunt diam. Nam tincidunt auctor tellus, nec dictum risus ullamcorper quis.',
                'image'         => 'products/dummy/wedding-ring-'.$i.'.jpg'
            ])->categoriesJewels()->attach(11); //->categoriesJewels()->attach(11,['category_parent_id' => 1]);
        }

        for($i = 1; $i <= 16; $i++){
            Product::create([
                'name'          => 'Diamond Ring Product ' .$i,
                'slug'          => 'diamond-ring-' .$i,
                'sku'           => rand(00000001, 99999999).$i.$i,
                'price'         => rand($this->price(500), $this->price(5000)),
                'description'   => 'Lorem ipsum ' . $i . 'dolor sit amet, consectetur adipiscing elit. Cras ac nisi eu tortor sodales ornare vitae non dolor. Praesent elit velit, blandit vitae nibh eget, feugiat tincidunt diam. Nam tincidunt auctor tellus, nec dictum risus ullamcorper quis.',
                'image'         => 'products/dummy/diamond-ring-'.$i.'.jpg'
            ])->categoriesJewels()->attach(13);
        }

        // Select random entries to be best seller products
        Product::whereIn('id', [1, 5, 12, 22, 31])->update(['bestof' => true]);

        // Select random entries to be offer products
        Product::whereIn('id', [5, 10, 21, 25])->update(['offer' => true]);

        // Select random entries to be offer products
        Product::whereIn('id', [16, 17])->update(['hotdeals' => true]);

    }

    protected function price($price){
        return $price * 100;
    }
}
