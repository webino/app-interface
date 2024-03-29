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
 * Interface CoreInterface
 * @package app-interface
 */
interface CoreInterface extends AbstractAppInterface
{
    /**
     * Set bootstrap event handler.
     *
     * @param callable|null $callback Event handler
     * @param int $priority Handler invocation priority
     * @return void
     */
    public function onBootstrap($callback = null, int $priority = 0);

    /**
     * Application bootstrapping
     *
     * @param BootstrapEventInterface|null $bootstrapEvent
     * @return AppDispatchInterface
     */
    public function bootstrap(BootstrapEventInterface $bootstrapEvent = null): AppDispatchInterface;
}
