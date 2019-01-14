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
            ['name' => 'Rings', 'slug' => 'rings', 'image' => 'category-jewels/dummy/ring.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Necklaces', 'slug' => 'necklaces', 'image' => 'category-jewels/dummy/necklace.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Watches', 'slug' => 'watches', 'image' => 'category-jewels/dummy/watch.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Earrings', 'slug' => 'earrings', 'image' => 'category-jewels/dummy/earring.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bracelets', 'slug' => 'bracelets', 'image' => 'category-jewels/dummy/bracelet.jpg', 'created_at' => $now, 'updated_at' => $now],

            ['name' => 'Hairpins', 'slug' => 'hairpins', 'image' => 'category-jewels/dummy/hairpin.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chatelaine', 'slug' => 'chatelaine', 'image' => 'category-jewels/dummy/chatelaine.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Anklet', 'slug' => 'anklet', 'image' => 'category-jewels/dummy/anklet.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cuff Links', 'slug' => 'cuff-links', 'image' => 'category-jewels/dummy/cuff-link.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Crosses', 'slug' => 'crosses', 'image' => 'category-jewels/dummy/cross.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);

        //rings
        CategoryJewel::insert([
            ['name' => 'Wedding Rings', 'parent_id' => 1, 'slug' => 'wedding-rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solitaires Rings', 'parent_id' => 1, 'slug' => 'solitaires-rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diamonds Rings', 'parent_id' => 1, 'slug' => 'diamond-rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pearls Rings', 'parent_id' => 1, 'slug' => 'pearl-rings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Zircon Rings', 'parent_id' => 1, 'slug' => 'zircon-rings', 'created_at' => $now, 'updated_at' => $now],
        ]);

        //necklaces
        CategoryJewel::insert([
            ['name' => 'Wedding Necklaces', 'parent_id' => 2, 'slug' => 'wedding-necklaces', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Minerals Necklaces', 'parent_id' => 2, 'slug' => 'minerals-necklaces', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Monograms', 'parent_id' => 2, 'slug' => 'monograms', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pendants Necklaces', 'parent_id' => 2, 'slug' => 'pendant-necklaces', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Choker Necklaces', 'parent_id' => 2, 'slug' => 'choker-necklaces', 'created_at' => $now, 'updated_at' => $now],
        ]);

        //watches
        CategoryJewel::insert([
            ['name' => 'Quartz Watches', 'parent_id' => 3, 'slug' => 'quartz-watches', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Automatic Watches', 'parent_id' => 3, 'slug' => 'automatic-watches', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kinetic Watches', 'parent_id' => 3, 'slug' => 'kinetic-watches', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Waterproof Watches', 'parent_id' => 3, 'slug' => 'waterproof-watches', 'created_at' => $now, 'updated_at' => $now],
        ]);

        //earring
        CategoryJewel::insert([
            ['name' => 'Nose piercings', 'parent_id' => 4, 'slug' => 'nose-piercings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Zircon Earrings', 'parent_id' => 4, 'slug' => 'zircon-earrings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Precious Earrings', 'parent_id' => 4, 'slug' => 'stones-earrings', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hoops Earrings', 'parent_id' => 4, 'slug' => 'hoops-earrings', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
