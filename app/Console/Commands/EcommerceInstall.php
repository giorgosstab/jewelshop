<?php

namespace App\Console\Commands;

use App\BlogPost;
use App\CustomPage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class EcommerceInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ecommerce:install {--force : Do not ask for user confirmation!}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install dummies data for E-commerce Shop!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->option('force')) {
            $this->proceed();
        } else {
            if ($this->confirm('The following command will delete all data and install the default dummy. Are you sure?')) {
                $this->proceed();
            }
        }
    }


    protected function proceed(){
        File::deleteDirectory(public_path('storage/settings/dummy'));
        File::deleteDirectory(public_path('storage/category-jewels/dummy'));
        File::deleteDirectory(public_path('storage/products/dummy'));
        File::deleteDirectory(public_path('storage/brands/dummy'));
        File::deleteDirectory(public_path('storage/deliveries/dummy'));
        File::deleteDirectory(public_path('storage/payments/dummy'));
        File::deleteDirectory(public_path('storage/custom-pages/dummy'));
        File::deleteDirectory(public_path('storage/custom-posts/dummy'));
        File::deleteDirectory(public_path('storage/blog-posts/dummy'));
        File::deleteDirectory(public_path('storage/themes/dummy'));
        $this->callSilent('storage:link');

        $copySuccess = File::copyDirectory(public_path('assets/images/dummySettings'), public_path('storage/settings/dummy'));
        if($copySuccess){
            $this->info('Image Settings copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyCategories'), public_path('storage/category-jewels/dummy'));
        if($copySuccess){
            $this->info('Image Category-jewels copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyProducts'), public_path('storage/products/dummy'));
        if($copySuccess){
            $this->info('Image Products copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyBrands'), public_path('storage/brands/dummy'));
        if($copySuccess){
            $this->info('Image Brands copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyDelivery'), public_path('storage/deliveries/dummy'));
        if($copySuccess){
            $this->info('Image Deliveries copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyPayment'), public_path('storage/payments/dummy'));
        if($copySuccess){
            $this->info('Image Payments copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyPages'), public_path('storage/custom-pages/dummy'));
        if($copySuccess){
            $this->info('Image Custom Pages copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyBlogPosts'), public_path('storage/blog-posts/dummy'));
        if($copySuccess){
            $this->info('Image Blog Posts copied successfully on storage folder.');
        }
        $copySuccess = File::copyDirectory(public_path('assets/images/dummyThemes'), public_path('storage/themes/dummy'));
        if($copySuccess){
            $this->info('Image Themes copied successfully on storage folder.');
        }

        $this->call('migrate:fresh', [
            '--seed' => true,
        ]);

        try {
            $this->call('scout:flush', [
                'model' => 'App\Product',
            ]);
            $this->call('scout:import', [
                'model' => 'App\Product',
            ]);
        } catch (\Exception $e) {
            $this->error('Algolia credentials incorrect. Check your .env file. Make sure ALGOLIA_APP_ID and ALGOLIA_SECRET are correct.');
        }
//        $this->call('scout:flush', [
//            'model' => 'App\Product'
//        ]);
//        $this->call('scout:import', [
//            'model' => 'App\Product'
//        ]);

        $this->call('db:seed', [
            '--class' => 'VoyagerDatabaseSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'VoyagerDummyDatabaseSeeder',
        ]);

        $this->call('db:seed', [
            '--class' => 'DataTypesTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'DataRowsTableSeederCustom',
        ]);

        $this->call('db:seed', [
            '--class' => 'MenusTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'MenuItemsTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'RolesTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'PermissionsTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'PermissionRoleTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'PermissionRoleTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'UsersTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'SettingsTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'RatingTableSeeder',
        ]);


        // update category id and author id in table blog_posts because table user seeding run after my custom seeds
        BlogPost::where('id', 1)->update(['author_id' => 1, 'category_id' => 2]);
        BlogPost::where('id', 2)->update(['author_id' => 1, 'category_id' => 1]);
        BlogPost::where('id', 3)->update(['author_id' => 1, 'category_id' => 3]);

        // update user id in table custom_pages because table user seeding run after my custom seeds
        CustomPage::whereIn('id', [1,2,3,4])->update(['user_id' => 1]);


        //import blog post tags after seeding all e-shop
        $blogPost = BlogPost::find(1);
        $blogPost->tags()->attach(1);
        $blogPost->tags()->attach(2);
        $blogPost->tags()->attach(5);

        $blogPost1 = BlogPost::find(2);
        $blogPost1->tags()->attach(3);

        $blogPost = BlogPost::find(3);
        $blogPost->tags()->attach(1);
        $blogPost->tags()->attach(4);
        $blogPost->tags()->attach(5);


        $this->info('Dummy data installed.');
    }
}
