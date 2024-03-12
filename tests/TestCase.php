<?php

namespace Clickbar\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Clickbar\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
