<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/app-interface
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

/**
 * Interface AppAwareInterface
 * @package app-interface
 */
interface AppAwareInterface
{
    /**
     * Returns application.
     *
     * @return AppInterface
     * @throws NoAppException
     */
    public function getApp(): AppInterface;
}
