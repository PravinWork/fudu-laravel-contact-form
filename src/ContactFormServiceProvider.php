<?php
// FuduGo\Contactform\src\ContactFormServiceProvider.php
namespace FuduGo\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider {
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/routes/web.php');
    	$this->loadViewsFrom(__DIR__.'/resources/views', 'Contactform');
    	$this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }
    public function register()
    {
    }
}
?>