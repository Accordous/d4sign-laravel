<?php

namespace Accordous\D4sign\Tests;

use Accordous\D4sign\Providers\D4SignServiceProvider;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * add the package provider
     *
     * @param  Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            D4SignServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('d4sign.base_uri', 'http://sandbox.d4sign.com.br/api/v1/');
        $app['config']->set('d4sign.token_api', 'your_token');
        $app['config']->set('d4sign.crypt_key', 'your_crypt');
    }
}
