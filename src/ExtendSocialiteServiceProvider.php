<?php

namespace Hapasoft\ExtendSocialite;

use Hapasoft\ExtendSocialite\Providers\ExtendFacebookProvider;
use Hapasoft\ExtendSocialite\Providers\ExtendGithubProvider;
use Hapasoft\ExtendSocialite\Providers\ExtendGoogleProvider;
use Hapasoft\ExtendSocialite\Providers\ExtendLinkedinProvider;
use Hapasoft\ExtendSocialite\Providers\ExtendTwitterProvider;
use Hapasoft\ExtendSocialite\Providers\ExtendXProvider;
use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Contracts\Factory as SocialiteFactory;

class ExtendSocialiteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(SocialiteFactory $socialite)
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'extend-socialite');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'extend-socialite');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__ . '/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('extend-socialite.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/extend-socialite'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/extend-socialite'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/extend-socialite'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

        }
        $socialite->extend('google', function ($app) {
            $config = $app['config']['services.google'];
            if (empty($config['client_id']) || empty($config['client_secret'])) {
                throw new \InvalidArgumentException('The google client_id and client_secret must be set on services config.');
            }
            return new ExtendGoogleProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });
        $socialite->extend('facebook', function ($app) {
            $config = $app['config']['services.facebook'];
            if (empty($config['client_id']) || empty($config['client_secret'])) {
                throw new \InvalidArgumentException('The facebook client_id and client_secret must be set on services config.');
            }
            return new ExtendFacebookProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });
        $socialite->extend('github', function ($app) {
            $config = $app['config']['services.github'];
            if (empty($config['client_id']) || empty($config['client_secret'])) {
                throw new \InvalidArgumentException('The github client_id and client_secret must be set on services config.');
            }
            return new ExtendGithubProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });
        $socialite->extend('x', function ($app) {
            $config = $app['config']['services.x'];
            if (empty($config['client_id']) || empty($config['client_secret'])) {
                throw new \InvalidArgumentException('The x client_id and client_secret must be set on services config.');
            }
            return new ExtendXProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });
        $socialite->extend('linkedin', function ($app) {
            $config = $app['config']['services.linkedin'];
            if (empty($config['client_id']) || empty($config['client_secret'])) {
                throw new \InvalidArgumentException('The linkedin client_id and client_secret must be set on services config.');
            }
            return new ExtendLinkedinProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });

        $socialite->extend('twitter', function ($app) {
            $config = $app['config']['services.twitter'];
            if (empty($config['client_id']) || empty($config['client_secret'])) {
                throw new \InvalidArgumentException('The twitter client_id and client_secret must be set on services config.');
            }
            return new ExtendTwitterProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'extend-socialite');

        // Register the main class to use with the facade
        $this->app->singleton('extend-socialite', function () {
            return new ExtendSocialite;
        });
    }
}
