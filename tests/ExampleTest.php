<?php

namespace Rayblair\Remora\Tests;

use Orchestra\Testbench\TestCase;
use Rayblair\Remora\RemoraServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [RemoraServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
