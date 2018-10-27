<?php
declare(strict_types = 1);

namespace Campanda\Server\Status\Server\Cpu;

use Campanda\Server\Status\Exception\OutOfBoundsPercentage;

final class Percentage
{
    private $value;

    public function __construct(float $value)
    {
        if ($value < 0) {
            throw new OutOfBoundsPercentage;
        }

        $this->value = $value;
    }

    public function toFloat(): float
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value.'%';
    }
}
