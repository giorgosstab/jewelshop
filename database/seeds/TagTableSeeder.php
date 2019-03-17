<?php

use App\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Tag::insert([
            ['name' => '#jewels', 'slug' =>'jewels', 'status' => Tag::STATUS_PUBLISHED, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '#diamond', 'slug' =>'diamond', 'status' => Tag::STATUS_PUBLISHED, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '#watch', 'slug' =>'watch', 'status' => Tag::STATUS_PUBLISHED, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '#gifts', 'slug' =>'gifts', 'status' => Tag::STATUS_PUBLISHED, 'created_at' => $now, 'updated_at' => $now],
            ['name' => '#rings', 'slug' =>'rings', 'status' => Tag::STATUS_PUBLISHED, 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}
