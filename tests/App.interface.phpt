<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @noinspection PhpUnhandledExceptionInspection
 * @interpreter php-cgi
 *
 * @link        https://github.com/webino/app-interface
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */

namespace Webino;

use Tester\Assert;
use Tester\Environment;

Environment::setup();


class TestApp implements AppInterface
{
    use EventEmitterTrait;
    use InstanceContainerTrait;
}

$app = new TestApp;


Assert::type(AppInterface::class, $app);
