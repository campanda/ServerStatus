<?php
declare(strict_types = 1);

namespace Campanda\Server\Status\Server;

use Campanda\Server\Status\Server\Disk\{
    Volume,
    Volume\MountPoint
};
use Innmind\Immutable\MapInterface;

interface Disk
{
    /**
     * @return MapInterface<string, Volume>
     */
    public function volumes(): MapInterface;
    public function get(MountPoint $point): Volume;
}
