<?php
declare(strict_types = 1);

namespace Tests\Campanda\Server\Status\Server\Process;

use Campanda\Server\Status\Server\Process\Memory;
use PHPUnit\Framework\TestCase;

class MemoryTest extends TestCase
{
    public function testInterface()
    {
        $memory = new Memory(42.24);

        $this->assertSame(42.24, $memory->toFloat());
        $this->assertSame('42.24%', (string) $memory);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\OutOfBoundsPercentage
     */
    public function testThrowWhenMemoryLowerThanZero()
    {
        new Memory(-1);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\OutOfBoundsPercentage
     */
    public function testThrowWhenMemoryHigherThanHundred()
    {
        new Memory(101);
    }
}
