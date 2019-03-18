<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeederCustom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* =============================== *
         *                                 *
         *      SITE SETTINGS              *
         *                                 *
         * =============================== */

        //update exist settings with values
        $setting = $this->findSetting('site.title');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'Jewellery Shoppe',
            ])->update();
        }
        $setting = $this->findSetting('site.description');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'Jewellery Shoppe | Κοσμήματα, Ρολόγια, Σταυροί Βάπτισης, Μονόπετρα, Βέρες, Κρεμαστά, Κολιέ, Βραχιόλια | Μοναδικά χρυσά κοσμήματα και επώνυμα ρολόγια χειρός για τον άντρα, την γυναίκα και το παιδί με δωρεάν αποστολή, σε προσεγμένη συσκευασία δώρου.',
            ])->update();
        }
        $setting = $this->findSetting('site.logo');
        if ($setting->exists) {
            $setting->fill([
                'display_name' => 'Site Logo Top',
                'value'        => 'settings\dummy\logo.png',
                'order'        => 9,
            ])->update();
        }
        $setting = $this->findSetting('site.google_analytics_tracking_id');
        if ($setting->exists) {
            $setting->fill([
                'order'        => 19,
            ])->update();
        }


        //custom settings with values
        $setting = $this->findSetting('site.phone_view');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site Phone View',
                'value'        => '(+30) 26910 34567',
                'details'      => '',
                'type'         => 'text',
                'order'        => 3,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.phone');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site Phone',
                'value'        => '(+30)2691034567',
                'details'      => '',
                'type'         => 'text',
                'order'        => 4,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.email');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site E-mail',
                'value'        => 'info@jewelshop.io',
                'details'      => '',
                'type'         => 'text',
                'order'        => 5,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.address');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site Address',
                'value'        => 'Βασιλέως Κωνσταντίνου 3,  Αίγιον 251 00, Greece',
                'details'      => '',
                'type'         => 'text',
                'order'        => 6,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.daily_hour');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site Open Hour',
                'value'        => '9:00pm - 5:00pm | Sunday Closed',
                'details'      => '',
                'type'         => 'text',
                'order'        => 7,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.favicon');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site Favicon',
                'value'        => '[{"download_link":"settings\\/dummy\\/favicon.ico","original_name":"favicon.ico"}]',
                'details'      => '',
                'type'         => 'file',
                'order'        => 8,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.logo_footer');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Site Logo Footer',
                'value'        => 'settings\dummy\logo-footer.png',
                'details'      => '',
                'type'         => 'image',
                'order'        => 10,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.home_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Home Page Parallax',
                'value'        => 'settings\dummy\home.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 11,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.about_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'About US Page Parallax',
                'value'        => 'settings\dummy\about.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 12,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.shop_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Shop Page Parallax',
                'value'        => 'settings\dummy\shop.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 13,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.blog_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Blog Page Parallax',
                'value'        => 'settings\dummy\blog.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 14,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.register_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Register Parallax',
                'value'        => 'settings\dummy\register.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 15,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.login_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Login Parallax',
                'value'        => 'settings\dummy\login.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 16,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.reset-new_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Reset Password - New Password Parallax',
                'value'        => 'settings\dummy\reset.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 17,
                'group'        => 'Site',
            ])->save();
        }
        $setting = $this->findSetting('site.resend-code_parallax');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => 'Resend Activation Code Parallax',
                'value'        => 'settings\dummy\resend.jpg',
                'details'      => '',
                'type'         => 'image',
                'order'        => 18,
                'group'        => 'Site',
            ])->save();
        }

        /* =============================== *
         *                                 *
         *      ADMIN SETTINGS             *
         *                                 *
         * =============================== */

        //update exist settings with values
        $setting = $this->findSetting('admin.title');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'JewelShop',
            ])->update();
        }
        $setting = $this->findSetting('admin.description');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'Welcome to Admin Panel. The Missing Admin CMS of Voyager!',
                'order'        => 2,
            ])->update();
        }
        $setting = $this->findSetting('admin.loader');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'settings\dummy\admin-loader.png',
                'order'        => 3,
            ])->update();
        }
        $setting = $this->findSetting('admin.icon_image');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'settings\dummy\admin-icon.png',
                'order'        => 4,
            ])->update();
        }
        $setting = $this->findSetting('admin.bg_image');
        if ($setting->exists) {
            $setting->fill([
                'value'        => 'settings\dummy\admin-bg.jpg',
                'order'        => 5,
            ])->update();
        }
        $setting = $this->findSetting('admin.google_analytics_client_id');
        if ($setting->exists) {
            $setting->fill([
                'order'        => 6,
            ])->update();
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
