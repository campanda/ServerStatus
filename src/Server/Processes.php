<?php
declare(strict_types = 1);

namespace Campanda\Server\Status\Server;

use Campanda\Server\Status\Server\{
    Process,
    Process\Pid
};
use Innmind\Immutable\MapInterface;

interface Processes
{
    /**
     * @return MapInterface<int, Process>
     */
    public function all(): MapInterface;
    public function get(Pid $pid): Process;
}
