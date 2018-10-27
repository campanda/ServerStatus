<?php
declare(strict_types = 1);

namespace Campanda\Server\Status;

use Campanda\Server\Status\{
    Servers\OSX,
    Servers\Linux,
    Exception\UnsupportedOperatingSystem
};
use Innmind\TimeContinuum\TimeContinuumInterface;

final class ServerFactory
{
    private $clock;

    public function __construct(TimeContinuumInterface $clock)
    {
        $this->clock = $clock;
    }

    public function make(): Server
    {
        switch (PHP_OS) {
            case 'Darwin':
                return new OSX($this->clock);

            case 'Linux':
                return new Linux($this->clock);
        }

        throw new UnsupportedOperatingSystem;
    }

    public static function build(TimeContinuumInterface $clock): Server
    {
        return (new self($clock))->make();
    }
}
