<?php

use App\CategoryJewel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesJewelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        CategoryJewel::insert([
            ['name' => 'Wedding Rings', 'slug' => 'wedding-rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rings', 'slug' => 'rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solitaires Rings', 'slug' => 'solitaires-rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cross', 'slug' => 'cross', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Watches', 'slug' => 'watches', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Jewelry', 'slug' => 'jewelry', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
