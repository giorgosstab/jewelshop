<?php

namespace App\Providers;

use App\VoyagerTheme;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class VoyagerThemesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try{

            $this->loadViewsFrom(__DIR__.'/../resources/views', 'themes');

            $theme = '';

            if (Schema::hasTable('voyager_themes')) {
                $theme = $this->rescue(function () {
                    return VoyagerTheme::where('active', '=', 1)->first();
                });
                if(Cookie::get('voyager_theme')){
                    $theme_cookied = VoyagerTheme::where('folder', '=', Cookie::get('voyager_theme'))->first();
                    if(isset($theme_cookied->id)){
                        $theme = $theme_cookied;
                    }
                }
            }

            view()->share('theme', $theme);

            $this->themes_folder = config('themes.themes_folder', resource_path('views/themes'));

            $this->loadDynamicMiddleware($this->themes_folder, $theme);

            // Make sure we have an active theme
            if (isset($theme)) {
                $this->loadViewsFrom($this->themes_folder.'/'.@$theme->folder, 'theme');
            }
            $this->loadViewsFrom($this->themes_folder, 'themes_folder');

        } catch(\Exception $e){
            return $e->getMessage();
        }
    }

    private function loadDynamicMiddleware($themes_folder, $theme){
        if (empty($theme)) {
            return;
        }
        $middleware_folder = $themes_folder . '/' . $theme->folder . '/middleware';
        if(file_exists( $middleware_folder )){
            $middleware_files = scandir($middleware_folder);
            foreach($middleware_files as $middleware){
                if($middleware != '.' && $middleware != '..'){
                    include($middleware_folder . '/' . $middleware);
                    $middleware_classname = 'VoyagerThemes\\Middleware\\' . str_replace('.php', '', $middleware);
                    if(class_exists($middleware_classname)){
                        // Dynamically Load The Middleware
                        $this->app->make('Illuminate\Contracts\Http\Kernel')->prependMiddleware($middleware_classname);
                    }
                }
            }
        }
    }

    // Duplicating the rescue function that's available in 5.5, just in case
    // A user wants to use this hook with 5.4
    function rescue(callable $callback, $rescue = null)
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            report($e);
            return value($rescue);
        }
    }
}
