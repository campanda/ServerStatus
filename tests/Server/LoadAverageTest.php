<?php
declare(strict_types = 1);

namespace Tests\Campanda\Server\Status\Server;

use Campanda\Server\Status\Server\LoadAverage;
use PHPUnit\Framework\TestCase;

class LoadAverageTest extends TestCase
{
    public function testInterface()
    {
        $load = new LoadAverage(1, 5, 15);

        $this->assertSame(1.0, $load->lastMinute());
        $this->assertSame(5.0, $load->lastFiveMinutes());
        $this->assertSame(15.0, $load->lastFifteenMinutes());
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\LoadAverageCannotBeNegative
     */
    public function testThrowWhenNegativeLastMinuteLoad()
    {
        new LoadAverage(-1, 5, 15);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\LoadAverageCannotBeNegative
     */
    public function testThrowWhenNegativeLastFiveMinuteLoad()
    {
        new LoadAverage(1, -5, 15);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\LoadAverageCannotBeNegative
     */
    public function testThrowWhenNegativeLastFifteenMinuteLoad()
    {
        new LoadAverage(1, 5, -15);
    }
}
