<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesJewelsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(DeliveryTableSeeder::class);
        $this->call(CustomPageTableSeeder::class);
    }
}
