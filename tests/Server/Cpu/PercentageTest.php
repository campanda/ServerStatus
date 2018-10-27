<?php
declare(strict_types = 1);

namespace Tests\Campanda\Server\Status\Server\Cpu;

use Campanda\Server\Status\Server\Cpu\Percentage;
use PHPUnit\Framework\TestCase;

class PercentageTest extends TestCase
{
    public function testInterface()
    {
        $percentage = new Percentage(42.24);

        $this->assertSame(42.24, $percentage->toFloat());
        $this->assertSame('42.24%', (string) $percentage);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\OutOfBoundsPercentage
     */
    public function testThrowWhenPercentageLowerThanZero()
    {
        new Percentage(-1);
    }
}
