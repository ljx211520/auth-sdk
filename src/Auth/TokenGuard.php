<?php
/**
 * Created by PhpStorm.
 * User: looksky
 * Date: 2019/10/20
 * Time: 10:51
 */

namespace Looksky\AuthSdk\Auth;

/**
 * token认证guard
 *
 * Class TokenGuard
 * @package Looksky\AuthSdk\Auth
 */
class TokenGuard
{
    /**
     * 检测是否认证
     *
     * @return bool
     */
    public function check()
    {
        return 'token';
    }
}