<?php


use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (file_exists(base_path('routes/web.php'))) {
            require base_path('routes/web.php');
            /*
            |--------------------------------------------------------------------------
            | Admin Menu
            |--------------------------------------------------------------------------
            */
            $menu = Menu::where('name', 'admin')->firstOrFail();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Dashboard',
                'url'     => '',
                'route'   => 'voyager.dashboard',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-home',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();

            $shopMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'E-commerce',
                'url'     => '',
            ]);
            if (!$shopMenuItem->exists) {
                $shopMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-shop',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 2,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Brands',
                'url' => '/admin/brands',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-archive',
                    'color' => null,
                    'parent_id' => $shopMenuItem->id,
                    'order' => 1,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Categories',
                'url'     => '/admin/category-jewels',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-categories',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 2,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Products',
                'url'     => '/admin/products',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-bag',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 3,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Coupons',
                'url'     => '/admin/coupons',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-dollar',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 4,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Deliveries',
                'url'     => '/admin/deliveries',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-truck',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 5,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Payments',
                'url'     => '/admin/payments',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-wallet',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 6,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Orders',
                'url'     => '/admin/orders',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'fa fa-shopping-bag',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 7,
                ])->save();
            }
//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Category Products',
//                'url'     => '/admin/category-jewel-product',
//                'route'   => null,
//            ]);
//            if (!$menuItem->exists) {
//                $menuItem->fill([
//                    'target'     => '_self',
//                    'icon_class' => 'voyager-tag',
//                    'color'      => null,
//                    'parent_id'  => $shopMenuItem->id,
//                    'order'      => 7,
//                ])->save();
//            }

            $userMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Users',
                'url'     => '',
            ]);
            if (!$userMenuItem->exists) {
                $userMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-people',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 3,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Manage',
                'url'     => '',
                'route'   => 'voyager.users.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-person',
                'color'      => null,
                'parent_id'  => $userMenuItem->id,
                'order'      => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Roles',
                'url'     => '',
                'route'   => 'voyager.roles.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-lock',
                'color'      => null,
                'parent_id'  => $userMenuItem->id,
                'order'      => 2,
            ])->save();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Media',
                'url'     => '',
                'route'   => 'voyager.media.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-images',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 4,
            ])->save();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Posts',
                'url'     => '',
                'route'   => 'voyager.posts.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-news',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 5,
            ])->save();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Pages',
                'url'     => '',
                'route'   => 'voyager.pages.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-file-text',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 6,
            ])->save();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Categories',
                'url'     => '',
                'route'   => 'voyager.categories.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-categories',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 7,
            ])->save();

            $toolsMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Tools',
                'url'     => '',
            ]);
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-tools',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 8,
            ])->save();

//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Menu Builder',
//                'url'     => '',
//                'route'   => 'voyager.menus.index',
//            ]);
//            $menuItem->fill([
//                'target'     => '_self',
//                'icon_class' => 'voyager-list',
//                'color'      => null,
//                'parent_id'  => $toolsMenuItem->id,
//                'order'      => 1,
//            ])->save();
//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Database',
//                'url'     => '',
//                'route'   => 'voyager.database.index',
//            ]);
//            $menuItem->fill([
//                'target'     => '_self',
//                'icon_class' => 'voyager-data',
//                'color'      => null,
//                'parent_id'  => $toolsMenuItem->id,
//                'order'      => 2,
//            ])->save();
//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Compass',
//                'url'     => '',
//                'route'   => 'voyager.compass.index',
//            ]);
//            $menuItem->fill([
//                'target'     => '_self',
//                'icon_class' => 'voyager-compass',
//                'color'      => null,
//                'parent_id'  => $toolsMenuItem->id,
//                'order'      => 3,
//            ])->save();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Settings',
                'url'     => '',
                'route'   => 'voyager.settings.index',
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 9,
            ])->save();
            /*
            |--------------------------------------------------------------------------
            | Main Menu
            |--------------------------------------------------------------------------
            */
            $menu = Menu::where('name', 'main')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Home',
                'url'     => '',
                'route'   => 'shop.home.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 1,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'About',
                'url'     => '',
                'route'   => 'shop.about.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 2,
                ])->save();
            }

            $shopMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Shop',
                'url'     => '',
                'route'   => 'shop.products.index',
            ]);
            if (!$shopMenuItem->exists) {
                $shopMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 3,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'megaMenu',
                'url'     => '#',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 1,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Blog',
                'url'     => '',
                'route'   => 'shop.blog.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 4,
                ])->save();
            }
            $pagesMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Pages',
                'url'     => '#',
                'route'   => null,
            ]);
            if (!$pagesMenuItem->exists) {
                $pagesMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 5,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => '404',
                'url'     => '#',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $pagesMenuItem->id,
                    'order'      => 1,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'FAQ',
                'url'     => '#',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $pagesMenuItem->id,
                    'order'      => 2,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Contact Us',
                'url'     => '',
                'route'   => 'shop.contact.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 6,
                ])->save();
            }
            /*
            |--------------------------------------------------------------------------
            | Social Media Menu
            |--------------------------------------------------------------------------
            */
            $menu = Menu::where('name', 'social_media')->firstOrFail();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'fa-facebook',
                'url'     => 'https://www.facebook.com',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 1,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'fa-twitter',
                'url'     => 'https://twitter.com/',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 2,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'fa-google-plus',
                'url'     => 'https://plus.google.com/',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 3,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'fa-linkedin',
                'url'     => 'https://www.linkedin.com/',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 4,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'fa-instagram',
                'url'     => 'http://instagram.com',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 5,
                ])->save();
            }
        }
    }
}
