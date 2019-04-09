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

            /*
            |--------------------------------------------------------------------------
            | E-commerce
            |--------------------------------------------------------------------------
            */
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
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Custom Pages',
                'url'     => '/admin/custom_pages',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'fa fa-plus-circle',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 8,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Ratings',
                'url'     => '/admin/ratings',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-star-two',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 9,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Wishlists',
                'url'     => '/admin/wishlists',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-heart',
                    'color'      => null,
                    'parent_id'  => $shopMenuItem->id,
                    'order'      => 10,
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

            /*
            |--------------------------------------------------------------------------
            | Blog
            |--------------------------------------------------------------------------
            */
            $blogMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Blog',
                'url'     => '',
            ]);
            if (!$blogMenuItem->exists) {
                $blogMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-news',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 3,
                ])->save();
            }
            //Blog submenu
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Categories',
                'url'     => '/admin/blog_categories',
                'route'   => null,
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-news',
                'color'      => null,
                'parent_id'  => $blogMenuItem->id,
                'order'      => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Posts',
                'url'     => '/admin/blog_posts',
                'route'   => null,
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-sticky-note',
                'color'      => null,
                'parent_id'  => $blogMenuItem->id,
                'order'      => 2,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Tags',
                'url'     => '/admin/tags',
                'route'   => null,
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-tags',
                'color'      => null,
                'parent_id'  => $blogMenuItem->id,
                'order'      => 3,
            ])->save();


            /*
           |--------------------------------------------------------------------------
           | Comments
           |--------------------------------------------------------------------------
           */
            $commentMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Comments',
                'url'     => '',
            ]);
            if (!$commentMenuItem->exists) {
                $commentMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'fa fa-comments',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 4,
                ])->save();
            }
            //Comments submenu
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Comments',
                'url'     => '/admin/comments',
                'route'   => null,
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-comment',
                'color'      => null,
                'parent_id'  => $commentMenuItem->id,
                'order'      => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Replies',
                'url'     => '/admin/replies',
                'route'   => null,
            ]);
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-mail-reply-all',
                'color'      => null,
                'parent_id'  => $commentMenuItem->id,
                'order'      => 2,
            ])->save();

            /*
            |--------------------------------------------------------------------------
            | Users
            |--------------------------------------------------------------------------
            */
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
                    'order'      => 5,
                ])->save();
            }
            //User submenu
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

            /*
            |--------------------------------------------------------------------------
            | Media
            |--------------------------------------------------------------------------
            */
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
                'order'      => 6,
            ])->save();

            /*
            |--------------------------------------------------------------------------
            | Posts
            |--------------------------------------------------------------------------
            */
//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Posts',
//                'url'     => '',
//                'route'   => 'voyager.posts.index',
//            ]);
//            $menuItem->fill([
//                'target'     => '_self',
//                'icon_class' => 'voyager-news',
//                'color'      => null,
//                'parent_id'  => null,
//                'order'      => 5,
//            ])->save();


            /*
            |--------------------------------------------------------------------------
            | Pages
            |--------------------------------------------------------------------------
            */
//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Pages',
//                'url'     => '',
//                'route'   => 'voyager.pages.index',
//            ]);
//            $menuItem->fill([
//                'target'     => '_self',
//                'icon_class' => 'voyager-file-text',
//                'color'      => null,
//                'parent_id'  => null,
//                'order'      => 6,
//            ])->save();


            /*
            |--------------------------------------------------------------------------
            | Categories
            |--------------------------------------------------------------------------
            */
//            $menuItem = MenuItem::firstOrNew([
//                'menu_id' => $menu->id,
//                'title'   => 'Categories',
//                'url'     => '',
//                'route'   => 'voyager.categories.index',
//            ]);
//            $menuItem->fill([
//                'target'     => '_self',
//                'icon_class' => 'voyager-categories',
//                'color'      => null,
//                'parent_id'  => null,
//                'order'      => 7,
//            ])->save();

            /*
            |--------------------------------------------------------------------------
            | Themes Voyager
            |--------------------------------------------------------------------------
            */
            $themeMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Themes',
                'url'     => '',
            ]);
            if (!$themeMenuItem->exists) {
                $themeMenuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-paint-bucket',
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => 7,
                ])->save();
            }

            //voyager theme submenu
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Add Themes',
                'url' => '/admin/voyager_themes',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-edit',
                    'color' => null,
                    'parent_id' => $themeMenuItem->id,
                    'order' => 1,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Customize Themes',
                'url' => '/admin/themes',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-brush',
                    'color' => null,
                    'parent_id' => $themeMenuItem->id,
                    'order' => 2,
                ])->save();
            }

            /*
           |--------------------------------------------------------------------------
           | Tools
           |--------------------------------------------------------------------------
           */
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

            //Tools submenu
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


            /*
           |--------------------------------------------------------------------------
           | Settings
           |--------------------------------------------------------------------------
           */
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


            /*
           |--------------------------------------------------------------------------
           | Home
           |--------------------------------------------------------------------------
           */
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

            /*
           |--------------------------------------------------------------------------
           | About
           |--------------------------------------------------------------------------
           */
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'About',
                'url'     => '/about',
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

            /*
           |--------------------------------------------------------------------------
           | Shop
           |--------------------------------------------------------------------------
           */
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

                    // -----Shop mega menu------------ //
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Rings',
                        'url'     => '/shop?cat=rings',
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

                            //sub sub menu
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Wedding Rings',
                                'url'     => 'wedding-rings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 1,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Solitaires Rings',
                                'url'     => 'solitaires-rings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 2,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Diamonds Rings',
                                'url'     => 'diamond-rings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 3,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Pearls Rings',
                                'url'     => 'pearl-rings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 4,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Zircon Rings',
                                'url'     => 'zircon-rings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 5,
                                ])->save();
                            }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Necklaces',
                        'url'     => 'necklaces',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 2,
                        ])->save();
                    }
                            //sub sub menu
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Wedding Necklaces',
                                'url'     => 'wedding-necklaces',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 1,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Minerals Necklaces',
                                'url'     => 'minerals-necklaces',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 2,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Monograms',
                                'url'     => 'monograms',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 3,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Pendants Necklaces',
                                'url'     => 'pendant-necklaces',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 4,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Choker Necklaces',
                                'url'     => 'choker-necklaces',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 5,
                                ])->save();
                            }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Watches',
                        'url'     => 'watches',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 3,
                        ])->save();
                    }
                            //sub sub menu
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Quartz Watches',
                                'url'     => 'quartz-watches',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 1,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Automatic Watches',
                                'url'     => 'automatic-watches',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 2,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Kinetic Watches',
                                'url'     => 'kinetic-watches',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 3,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Waterproof Watches',
                                'url'     => 'waterproof-watches',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 4,
                                ])->save();
                            }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Earrings',
                        'url'     => 'earrings',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 4,
                        ])->save();
                    }
                            //sub sub menu
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Nose piercings',
                                'url'     => 'nose-piercings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 1,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Zircon Earrings',
                                'url'     => 'zircon-earrings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 2,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Precious Earrings',
                                'url'     => 'stones-earrings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 3,
                                ])->save();
                            }
                            $menuItemSub = MenuItem::firstOrNew([
                                'menu_id' => $menu->id,
                                'title'   => 'Hoops Earrings',
                                'url'     => 'hoops-earrings',
                                'route'   => null,
                            ]);
                            if (!$menuItemSub->exists) {
                                $menuItemSub->fill([
                                    'target'     => '_self',
                                    'icon_class' => null,
                                    'color'      => null,
                                    'parent_id'  => $menuItem->id,
                                    'order'      => 4,
                                ])->save();
                            }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Bracelets',
                        'url'     => 'bracelets',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 5,
                        ])->save();
                    }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Hairpins',
                        'url'     => 'hairpins',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 6,
                        ])->save();
                    }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Chatelaine',
                        'url'     => 'chatelaine',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 7,
                        ])->save();
                    }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Anklet',
                        'url'     => 'anklet',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 8,
                        ])->save();
                    }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Cuff Links',
                        'url'     => 'cuff-links',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 9,
                        ])->save();
                    }
                    $menuItem = MenuItem::firstOrNew([
                        'menu_id' => $menu->id,
                        'title'   => 'Crosses',
                        'url'     => 'crosses',
                        'route'   => null,
                    ]);
                    if (!$menuItem->exists) {
                        $menuItem->fill([
                            'target'     => '_self',
                            'icon_class' => null,
                            'color'      => null,
                            'parent_id'  => $shopMenuItem->id,
                            'order'      => 10,
                        ])->save();
                    }

            /*
           |--------------------------------------------------------------------------
           | Blog
           |--------------------------------------------------------------------------
           */
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

            /*
           |--------------------------------------------------------------------------
           | Privacy
           |--------------------------------------------------------------------------
           */
            $pagesMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Privacy',
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

            // Privacy submenu
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Terms & Condition',
                'url'     => '/terms',
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
                'url'     => '/faq',
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
                'title'   => 'Privacy',
                'url'     => '/privacy',
                'route'   => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => $pagesMenuItem->id,
                    'order'      => 3,
                ])->save();
            }

            /*
           |--------------------------------------------------------------------------
           | Contact Us
           |--------------------------------------------------------------------------
           */
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
                'url'     => 'https://www.facebook.com/jeweleryshoppe/',
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
                'url'     => 'https://www.instagram.com/jeweleryshoppe/',
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
            /*
            |--------------------------------------------------------------------------
            | Social Media Menu
            |--------------------------------------------------------------------------
            */
            $menu = Menu::where('name', 'quick_links')->firstOrFail();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'About Us',
                'url'     => '/about',
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
                'title'   => 'Shop Now',
                'url'     => '',
                'route'   => 'shop.products.index',
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
                    'order'      => 3,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Terms & Condition',
                'url'     => '/terms',
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
                'title'   => 'Privacy',
                'url'     => '/privacy',
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
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'FAQ',
                'url'     => '/faq',
                'route'   => null,
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
                    'order'      => 7,
                ])->save();
            }
        }
    }
}
