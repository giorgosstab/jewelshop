<?php

use App\VoyagerTheme;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class VoyagerThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        VoyagerTheme::insert([
            ['name' => 'JewelShop','folder' => 'jewelshop','active' => 1,'version' => '1.0','created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
