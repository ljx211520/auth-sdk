<?php
/**
 * Created by PhpStorm.
 * User: looksky
 * Date: 2019/10/20
 * Time: 10:47
 */

namespace Looksky\AuthSdk;

use Looksky\AuthSdk\Auth\TokenGuard;

/**
 * 统一登录认证
 *
 * Class AuthManager
 * @package Looksky\AuthSdk
 */
class AuthManager
{
    /**
     * 获取认证驱动
     *
     * @return string
     */
    public function driver()
    {
        return new TokenGuard();
    }

    /**
     * Dynamically call the default driver instance.
     *
     * @param string $name
     * @param array $parameters
     * @return mixed
     */
    public function __call($name, $parameters)
    {
        return $this->driver()->{$name}(...$parameters);
    }
}