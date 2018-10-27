<?php
declare(strict_types = 1);

namespace Tests\Campanda\Server\Status\Server\Disk\Volume;

use Campanda\Server\Status\Server\Disk\Volume\MountPoint;
use PHPUnit\Framework\TestCase;

class MountPointTest extends TestCase
{
    public function testInterface()
    {
        $mountPoint = new MountPoint('foo');

        $this->assertSame('foo', (string) $mountPoint);
    }

    /**
     * @expectedException Campanda\Server\Status\Exception\EmptyPathNotAllowed
     */
    public function testThrowWhenEmptyMountPoint()
    {
        new MountPoint('');
    }
}
