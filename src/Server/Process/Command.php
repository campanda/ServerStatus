<?php
declare(strict_types = 1);

namespace Campanda\Server\Status\Server\Process;

use Campanda\Server\Status\Exception\EmptyCommandNotAllowed;

final class Command
{
    private $value;

    public function __construct(string $value)
    {
        if (empty($value)) {
            throw new EmptyCommandNotAllowed;
        }

        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
