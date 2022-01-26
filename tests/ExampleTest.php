<?php

namespace Liteas98\Colorconverter\Tests;

use Orchestra\Testbench\TestCase;
use Liteas98\Colorconverter\ColorconverterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ColorconverterServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
