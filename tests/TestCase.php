<?php

namespace Playkids\ApiResponse\Tests;

use Illuminate\Contracts\Foundation\Application;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Creates the application.
     *
     * @return Application
     */
    public function createApplication(): Application
    {
        return require_once __DIR__.'/../vendor/autoload.php';

    }
}
