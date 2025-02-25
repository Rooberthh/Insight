<?php

declare(strict_types=1);

namespace Rooberthh\Insight\Tests;

use Orchestra\Testbench\TestCase;
use Rooberthh\Insight\Providers\InsightServiceProvider;

class InsightTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [InsightServiceProvider::class];
    }

    /**
     * Define environment setup.
     *
     * @param  Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}
