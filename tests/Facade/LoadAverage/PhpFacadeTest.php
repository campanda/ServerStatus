<?php
declare(strict_types = 1);

namespace Tests\Campanda\Server\Status\Facade\LoadAverage;

use Campanda\Server\Status\{
    Facade\LoadAverage\PhpFacade,
    Server\LoadAverage
};
use PHPUnit\Framework\TestCase;

class PhpFacadeTest extends TestCase
{
    public function testInterface()
    {
        $facade = new PhpFacade;

        $this->assertInstanceOf(LoadAverage::class, $facade());
    }
}
