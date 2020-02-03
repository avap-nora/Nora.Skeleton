<?php
declare(strict_types=1);

namespace __Vendor__\__Package__;

use PHPUnit\Framework\TestCase;
use Nora\Kernel\Bootstrap;
use __Vendor____Package__Fake\Kernel;

class __Package__Test extends TestCase
{
    /**
     * @test
     */
    public function 起動()
    {
        $kernel = (new Bootstrap)('__Vendor____Package__Fake', 'app-test');

        $this->assertInstanceOf(Kernel::class, $kernel);
        return $kernel;
    }
}
