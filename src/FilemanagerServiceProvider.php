<?php 

namespace Devsemicolon\AdminFilemanager;

use Illuminate\Support\ServiceProvider;

class FilemanagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('Devsemicolon\AdminFilemanager\AdminFileManagerController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'admin-filemanager');

        $this->publishes([
            __DIR__.'/js' => public_path('js'),
            __DIR__.'/css' => public_path('css'),
            __DIR__.'/config/imagemanager.php' => config_path('imagemanager.php'),
        ],'admin-filemanager');

    }
}
