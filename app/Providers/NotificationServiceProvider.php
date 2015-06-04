<?php namespace BB\Providers;

use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'notification',
            function () {
                return $this->app->make('BB\Notifications\Notification');
            }
        );
    }


    public function boot()
    {
        //$this->app->make('notification')->build();
    }
}