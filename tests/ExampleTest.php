<?php

namespace Laracon21\Colorcodeconverter\Tests;

use Orchestra\Testbench\TestCase;
use Laracon21\Colorcodeconverter\ColorcodeconverterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ColorcodeconverterServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
