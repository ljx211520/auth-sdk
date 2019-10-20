<?php
/**
 * Created by PhpStorm.
 * User: looksky
 * Date: 2019/10/20
 * Time: 11:20
 */

namespace Looksky\AuthSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 统一认证门面
 *
 * Class SsoAuth
 * @package Looksky\AuthSdk\Facades
 */
class SsoAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sso_auth';
    }
}