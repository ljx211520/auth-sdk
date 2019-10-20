<?php
/**
 * Created by PhpStorm.
 * User: looksky
 * Date: 2019/10/20
 * Time: 10:47
 */

namespace Looksky\AuthSdk;

use Illuminate\Support\ServiceProvider;

/**
 * 统一认证服务提供者
 *
 * Class SsoAuthServiceProvider
 * @package Looksky\AuthSdk
 */
class SsoAuthServiceProvider extends ServiceProvider
{
    /**
     * 服务提供者是否延迟加载
     *
     * @var bool $defer
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Looksky\AuthSdk');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/sso_auth'),
            __DIR__ . '/../config/sso_auth.php' => config_path('sso_auth.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('sso_auth', function() {
            return new AuthManager();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'sso_auth'
        ];
    }
}
