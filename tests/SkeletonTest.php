<?php
declare(strict_types=1);

namespace __Vendor__\__Package__;

use PHPUnit\Framework\TestCase;
use Nora\Framework\Bootstrap;
use __Vendor____Package__Fake\Kernel\Kernel;

class __Package__Test extends TestCase
{
    /**
     * @test
     */
    public function モジュールの呼び出し()
    {
        $kernel = (new Bootstrap)('__Vendor____Package__Fake', 'app-test');

        $this->assertInstanceOf(Kernel::class, $kernel);
        return $kernel;
    }
}
