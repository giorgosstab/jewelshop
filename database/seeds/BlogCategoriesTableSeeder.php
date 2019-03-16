<?php

use App\BlogCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        BlogCategory::insert([
            ['name' => 'Hand Waches','slug' => 'hand-waches','status' => BlogCategory::STATUS_PUBLISHED,'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wedding Engagement','slug' => 'wedding-engagement','status' => BlogCategory::STATUS_PUBLISHED,'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diamond Ring','slug' => 'diamond-ring','status' => BlogCategory::STATUS_PUBLISHED,'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
