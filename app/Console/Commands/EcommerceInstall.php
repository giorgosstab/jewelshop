<?php

namespace App\Console\Commands;

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
//        File::deleteDirectory(public_path('storage/settings/dummy'));
//        File::deleteDirectory(public_path('storage/category-jewels/dummy'));
//        File::deleteDirectory(public_path('storage/products/dummy'));
//        File::deleteDirectory(public_path('storage/brands/dummy'));
//        File::deleteDirectory(public_path('storage/deliveries/dummy'));
//        File::deleteDirectory(public_path('storage/payments/dummy'));
        File::deleteDirectory(public_path('storage/settings'));
        File::deleteDirectory(public_path('storage/category-jewels'));
        File::deleteDirectory(public_path('storage/products'));
        File::deleteDirectory(public_path('storage/brands'));
        File::deleteDirectory(public_path('storage/deliveries'));
        File::deleteDirectory(public_path('storage/payments'));
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

        $this->call('migrate:fresh', [
            '--seed' => true,
        ]);

        $this->call('scout:flush', [
            'model' => 'App\Product'
        ]);
        $this->call('scout:import', [
            'model' => 'App\Product'
        ]);

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
            '--class' => 'PermissionsTableSeederCustom',
        ]);
        $this->call('db:seed', [
            '--class' => 'PermissionRoleTableSeeder',
        ]);
        $this->call('db:seed', [
            '--class' => 'SettingsTableSeederCustom',
        ]);



        $this->info('Dummy data installed.');
    }
}
